<?php
require('../fpdf/fpdf.php');
include "../config/config.php";
session_start();

class PDF extends FPDF
{
	protected $B = 0;
	protected $I = 0;
	protected $U = 0;
	protected $HREF = '';

	function WriteHTML($html)
	{
		// HTML parser
		$html = str_replace("\n", ' ', $html);
		$a = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
		foreach ($a as $i => $e) {
			if ($i % 2 == 0) {
				// Text
				if ($this->HREF)
					$this->PutLink($this->HREF, $e);
				else
					$this->Write(5, $e);
			} else {
				// Tag
				if ($e[0] == '/')
					$this->CloseTag(strtoupper(substr($e, 1)));
				else {
					// Extract attributes
					$a2 = explode(' ', $e);
					$tag = strtoupper(array_shift($a2));
					$attr = array();
					foreach ($a2 as $v) {
						if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3))
							$attr[strtoupper($a3[1])] = $a3[2];
					}
					$this->OpenTag($tag, $attr);
				}
			}
		}
	}

	function OpenTag($tag, $attr)
	{
		// Opening tag
		if ($tag == 'B' || $tag == 'I' || $tag == 'U')
			$this->SetStyle($tag, true);
		if ($tag == 'A')
			$this->HREF = $attr['HREF'];
		if ($tag == 'BR')
			$this->Ln(5);
	}

	function CloseTag($tag)
	{
		// Closing tag
		if ($tag == 'B' || $tag == 'I' || $tag == 'U')
			$this->SetStyle($tag, false);
		if ($tag == 'A')
			$this->HREF = '';
	}

	function SetStyle($tag, $enable)
	{
		// Modify style and select corresponding font
		$this->$tag += ($enable ? 1 : -1);
		$style = '';
		foreach (array('B', 'I', 'U') as $s) {
			if ($this->$s > 0)
				$style .= $s;
		}
		$this->SetFont('', $style);
	}

	function PutLink($URL, $txt)
	{
		// Put a hyperlink
		$this->SetTextColor(0, 0, 255);
		$this->SetStyle('U', true);
		$this->Write(5, $txt, $URL);
		$this->SetStyle('U', false);
		$this->SetTextColor(0);
	}
}

$pid = $_SESSION["project_id"];

$html = "<div class='collapse show' id='Sec5'>" .
	"<div class='card'>" .
	"<div class='card-header'>" .
	"<h3 class='card-title'>Testing Logs</h3>" .
	"</div>" .
	"<div class='card-body'>";

$query = "SELECT * FROM attachment_files where pid = '$pid'";
$result = mysqli_query($con, $query);
if (!empty($result)) {
	while ($array = mysqli_fetch_row($result)) {
		$fid = $array[0];
		$que1 = "SELECT * FROM test_cases where file_id = '$fid'";
		$res1 = mysqli_query($con, $que1);
		$total_files = 0;
		$total_cases = 0;
		$successful_cases = 0;
		$pending_cases = 0;
		if (!empty($res1)) {
			//if the code reaches here that means the project has file.
			$total_files = $total_files + 1;

			$html = $html . "<div class='card-header'>" .
				"<h3 class='card-title'>" .
				"<p> File: " . basename($array[3]) . "</p><br>" .
				"</h3>" .
				"</div><br>";
			while ($cases = mysqli_fetch_row($res1)) {
				//if the code reaches here that means the file has test cases.
				$total_cases = $total_cases + 1;
				$html = $html . "<table>" .
					"<tbody><tr><td>" . $cases[1] . "</td>" .
					"<td>" . $cases[2] . "</td>" .
					"<td>";
				// NOW ACCORDING TO THE STATUS, ADD BADGES
				if ($cases[5] == '0') {
					//if the code reaches here that means the file has pending test cases
					$pending_cases = $pending_cases + 1;
					$html = $html . "<p class='badge badge-danger'>Pending</p>";
				} else if ($cases[5] == '1') {
					//if the code reaches here that means the file has successful
					$successful_cases = $successful_cases + 1;
					$html = $html . "<p class='badge badge-success'>Success</p>";
				}
				$html = $html . "</td></tr><hr><br>" .
					"</tbody></table></div>";
			}
		}
	}
} else {
	$html = $html . "<p> Oops, you dont have any files or test cases. </p>";
}
$html = $html . "</div>" .
	"</div>
</div>";

$newpdf = new PDF();
// First page
$newpdf->AddPage();
$newpdf->SetFont('Arial', '', 12);
$newpdf->SetLeftMargin(15);
$newpdf->SetRightMargin(20);
$newpdf->SetTopMargin(20);
$newpdf->WriteHTML($html);
$newpdf->Output();

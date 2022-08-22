<!--SETTINGS -->
<div class=" collapse show" id="settings">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Settings</h3>
            <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="setttings">
                <i class="fas fa-times">
                </i>
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Choose Framework</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="../includes/scripter.php" method="POST">
                                <p>Choose a framework for your file</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button">Stack</button>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01" name="stack">
                                                    <option value="PHP">PHP</option>
                                                    <option value="JavaScript">JavaScript</option>
                                                    <option value=".NET">.NET</option>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <option value="PHP">Use Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button">Version</button>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect02" name="version">
                                                    <option value="PHP 3.1.0">PHP 3.1.0</option>
                                                    <option value="PHP 4.2.6">PHP 4.2.6</option>
                                                    <option value="PHP 7.5.0">PHP 7.5.0</option>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <option value="PHP 3.1.0">Use Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button">Cloud</button>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect03" name="cloud">
                                                    <option value="Microsoft Azure">Microsoft Azure</option>
                                                    <option value="Amazon Web Services">Amazon Web Services</option>
                                                    <option value="Google Cloud">Google Cloud</option>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <option value="Microsoft Azure">Use Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Allocate Resources</h4>
                        </div>
                        <div class="card-body">
                            <p>Allocate Cloud Resources for this File</p>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button">RAM</button>
                                            </div>
                                            <select class="custom-select" id="ram" name="ram">
                                                <option value="256 KB">256 KB</option>
                                                <option value="512 KB">512 KB</option>
                                                <option value="1 MB">1 MB</option>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <option value="256 KB">Use Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button">Cache</button>
                                            </div>
                                            <select class="custom-select" id="cache" name="cache">
                                                <option value="128 KB">128 KB</option>
                                                <option value="64 KB">64 KB</option>
                                                <option value="32 KB">32 KB</option>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <option value="32 KB">Use Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary" type="button">Storage</button>
                                            </div>
                                            <select class="custom-select" id="storage" name="storage">
                                                <option value="1 MB">1 MB</option>
                                                <option value="2 MB">2 MB</option>
                                                <option value="3 MB">3 MB</option>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <option value="2 MB">Use Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Set Goals</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <p>Select all that apply.</p>
                                        <!-- Example split danger button -->
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="SMTP Emails" id="emails" name="goals[]">
                                                            <label class="form-check-label" for="emails">
                                                                SMTP Emails
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="Financials" id="finances" name="goals[]">
                                                            <label class="form-check-label" for="finances">
                                                                Financials
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="CMS handling" id="cms" name="goals[]">
                                                            <label class="form-check-label" for="cms">
                                                                CMS handling
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="AI algorithms" id="algorithms" name="goals[]">
                                                            <label class="form-check-label" for="algorithms">
                                                                AI algorithms
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="Hybrid Stack" id="hybrid" name="goals[]">
                                                            <label class="form-check-label" for="hybrid">
                                                                Hybrid Stack
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="Data Science" id="data" name="goals[]">
                                                            <label class="form-check-label" for="data">
                                                                Data Science
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="ERP Hosting" id="erp" name="goals[]">
                                                            <label class="form-check-label" for="erp">
                                                                ERP Hosting
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="Heavy Traffic" id="traffic" name="goals[]">
                                                            <label class="form-check-label" for="traffic">
                                                                Heavy Traffic
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="Graphics" id="graphics" name="goals[]">
                                                            <label class="form-check-label" for="graphics">
                                                                Graphics
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="APIs" id="apis" name="goals[]">
                                                            <label class="form-check-label" for="apis">
                                                                APIs
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <input class="btn btn-primary float-right" type="submit" name="submit-settings" value="Submit">
            </form>
        </div>
    </div>
</div>
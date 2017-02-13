<!-- Wizard with validation -->
{{--<div class="panel panel-white">--}}

    <form class="form-validation" action="{{'/user'}}" method="post" id="store">
        {!! csrf_field() !!}
        <fieldset class="step" id="validation-step1">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">1</span>
                Personal data
                <small class="display-block">User + Profile data</small>
            </h6>

            <!-- USER NAME -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">First name: <span class="text-danger">*</span></label>
                        <input type="text" name="first name" class="form-control required" placeholder="John">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Last name: <span class="text-danger">*</span></label>
                        <input type="text" name="Last name" class="form-control required" placeholder="Doe">
                    </div>
                </div>
            </div>

            <!-- EMAIL + PHONE -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Email address: <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control required" placeholder="your@email.com">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Phone #:</label>
                        <input type="text" name="tel" class="form-control" placeholder="+99-99-999-999" data-mask="+99-99-999-999">
                    </div>
                </div>
            </div>

            <!-- GENDER + NATIONALITY -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Gender</label>
                        <label class="radio-inline">
                            <input type="radio" name="radio-inline-left" class="styled" checked="checked">
                            Male
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="radio-inline-left" class="styled">
                            Female
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Nationality: <span class="text-danger">*</span></label>
                        <input type="text" name="nationality" class="form-control required" placeholder="Australian">
                    </div>
                </div>
            </div>

            <!-- DOB + COUNTRY OF BIRTH -->
            <div class="row">
                <div class="col-md-6">
                    <label class="display-block text-semibold">Date of birth:</label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="birth-month" data-placeholder="Month" class="select">
                                    <option></option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="birth-day" data-placeholder="Day" class="select">
                                    <option></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="...">...</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="birth-year" data-placeholder="Year" class="select">
                                    <option></option>
                                    <option value="1">1980</option>
                                    <option value="2">1981</option>
                                    <option value="3">1982</option>
                                    <option value="4">1983</option>
                                    <option value="5">1984</option>
                                    <option value="6">1985</option>
                                    <option value="7">1986</option>
                                    <option value="8">1987</option>
                                    <option value="9">1988</option>
                                    <option value="10">1989</option>
                                    <option value="11">1990</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Country of Birth:</label>
                        <select name="university-country" data-placeholder="Choose a Country..." class="select">
                            <option></option>
                            <option value="1">United States</option>
                            <option value="2">France</option>
                            <option value="3">Germany</option>
                            <option value="4">Spain</option>
                            <option value="5">......</option>
                            <option value="6">Colombia</option>
                            <option value="7">Argentina</option>
                            <option value="8">Chile</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- CITY/TOWN OF BIRTH + COUNTRY OF RESIDENCY -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">City / Town of Birth:</label>
                        <input type="text" name="city-town-birth" class="form-control" placeholder="Wagga Wagga, NSW">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Country of Residency:</label>
                        <select name="country-of-residency" data-placeholder="Choose a Country..." class="select form-control required">
                            <option></option>
                            <option value="1">United States</option>
                            <option value="2">France</option>
                            <option value="3">Germany</option>
                            <option value="4">Spain</option>
                            <option value="5">......</option>
                            <option value="6">Colombia</option>
                            <option value="7">Argentina</option>
                            <option value="8">Chile</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- PASSPORT DETAILS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Passport Number: <span class="text-danger">*</span></label>
                        <input type="text" name="passport-number" class="form-control required" placeholder="ABC123456">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Passport Issue Date: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                            <input type="text" class="form-control pickadate-selectors" placeholder="Try me&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PASSPORT DETAILS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Passport Expiry Date: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                            <input type="text" class="form-control pickadate-selectors" placeholder="DD/MM/YYYY">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Issuing Authority: <span class="text-danger">*</span></label>
                        <input type="text" name="passport-issue-auth" class="form-control required" placeholder="SYDNEY CONSULATE">
                    </div>
                </div>
            </div>

            <!-- Relationship Status + Mother Tongue -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Relationship Status:</label>
                        <select name="relationship-status" data-placeholder="Choose an option..." class="select">
                            <option></option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                            <option value="3">De-Facto</option>
                            <option value="4">Widowed</option>
                            <option value="5">Separated</option>
                            <option value="6">Divorced</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block text-semibold">Mother Language: <span class="text-danger">*</span></label>
                        <select name="mother-language" data-placeholder="Choose an option..." class="select">
                            <option></option>
                            <option value="1">English</option>
                            <option value="2">Spanish</option>
                            <option value="3">Portuguese</option>
                            <option value="4">French</option>
                            <option value="5">German</option>
                            <option value="6">Chinese</option>
                            <option value="6">.....</option>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="step" id="validation-step2">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">2</span>
                Your education
                <small class="display-block">Let us know about your degree</small>
            </h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>University: <span class="text-danger">*</span></label>
                        <input type="text" name="university" placeholder="University name" class="form-control required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country:</label>
                        <select name="university-country" data-placeholder="Choose a Country..." class="select">
                            <option></option>
                            <option value="1">United States</option>
                            <option value="2">France</option>
                            <option value="3">Germany</option>
                            <option value="4">Spain</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Degree level: <span class="text-danger">*</span></label>
                        <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control required">
                    </div>

                    <div class="form-group">
                        <label>Specialization:</label>
                        <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>From:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-year" data-placeholder="Year" class="select">
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>To:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-year" data-placeholder="Year" class="select">
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Language of education:</label>
                        <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="step" id="validation-step3">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">3</span>
                Work experience
                <small class="display-block">Previous work places</small>
            </h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Company: <span class="text-danger">*</span></label>
                        <input type="text" name="experience-company" placeholder="Company name" class="form-control required">
                    </div>

                    <div class="form-group">
                        <label>Position: <span class="text-danger">*</span></label>
                        <input type="text" name="experience-position" placeholder="Company name" class="form-control required">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>From:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-year" data-placeholder="Year" class="select">
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>To:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="January">January</option>
                                            <option value="...">...</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-year" data-placeholder="Year" class="select">
                                            <option></option>
                                            <option value="1995">1995</option>
                                            <option value="...">...</option>
                                            <option value="1980">1980</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Brief description:</label>
                        <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="display-block">Recommendations:</label>
                        <input name="recommendations" type="file" class="file-styled">
                        <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="step" id="validation-step4">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">4</span>
                Additional info
                <small class="display-block">We are almost done now</small>
            </h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="display-block">Applicant resume:</label>
                        <input type="file" name="resume" class="file-styled">
                        <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Where did you find us? <span class="text-danger">*</span></label>
                        <select name="source" data-placeholder="Choose an option..." class="select-simple required">
                            <option></option>
                            <option value="monster">Monster.com</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="google">Google</option>
                            <option value="adwords">Google AdWords</option>
                            <option value="other">Other source</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Availability: <span class="text-danger">*</span></label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="availability" class="styled required">
                                Immediately
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="availability" class="styled">
                                1 - 2 weeks
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="availability" class="styled">
                                3 - 4 weeks
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="availability" class="styled">
                                More than 1 month
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Additional information:</label>
                        <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="form-wizard-actions">
            <button class="btn btn-default" id="validation-back" type="reset">Back</button>
            <button class="btn btn-info" id="validation-next" type="submit">Next</button>
        </div>
    </form>
{{--</div>--}}
<!-- /wizard with validation -->
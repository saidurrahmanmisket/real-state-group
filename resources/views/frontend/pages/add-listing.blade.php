@extends('frontend.master')
@section('content')
    
<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('frontend/img/bg/14.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Add Listing</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Add Listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- APPOINTMENT AREA START -->
<div class="ltn__appointment-area pt-115--- pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">                    
                <form action="#">
                    <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_1">1. Description</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_2" class="">2. Media</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">3. Location</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">4. Details</a>
                            <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">5. Amenities</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__apartments-tab-content-inner">
                                <h6>Property Description</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="*Title (mandatory)">
                                        </div>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea name="ltn__message" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <h6>Property Price</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item  input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Price in $ (only numbers)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="After Price Label (ex: /month)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Before Price Label (ex: from)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Yearly Tax Rate">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Homeowners Association Fee(monthly)">
                                        </div>
                                    </div>
                                </div>
                                <h6>Select Categories</h6>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>None</option>
                                                <option>Apartments</option>
                                                <option>Condos</option>
                                                <option>Duplexes</option>
                                                <option>Houses</option>
                                                <option>Industrial</option>
                                                <option>Land</option>
                                                <option>Offices</option>
                                                <option>Retail</option>
                                                <option>Villas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>None</option>
                                                <option>Rentals</option>
                                                <option>Sales</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>no status</option>
                                                <option>Active</option>
                                                <option>hot offer</option>
                                                <option>new offer</option>
                                                <option>open house</option>
                                                <option>sold</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper text-center--- mt-0">
                                    <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</button> -->
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <h6>Listing Media</h6>
                                <input type="file" id="myFile" name="filename" class="btn theme-btn-3 mb-10"><br>
                                <p>
                                    <small>* At least 1 image is required for a valid submission.Minimum size is 500/500px.</small><br>
                                    <small>* PDF files upload supported as well.</small><br>
                                    <small>* Images might take longer to be processed.</small>
                                </p>
                                <h6>Video Option</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>Video from</option>
                                                <option>vimeo</option>
                                                <option>youtube</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Embed Video ID">
                                        </div>
                                    </div>
                                </div>
                                <h6>Virtual Tour</h6>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="ltn__message" placeholder="Virtual Tour:"></textarea>
                                </div>
                                <div class="btn-wrapper text-center--- mt-0">
                                    <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</button> -->
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Prev Step</a>
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <h6>Listing Location</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="*Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="County / State">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Neighborhood">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="property-details-google-map mb-60">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Latitude (for Google Maps)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Longitude (for Google Maps)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="checkbox-item">Enable Google Street View
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Google Street View - Camera Angle (value from 0 to 360)">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper text-center--- mt-0">
                                    <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</button> -->
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Prev Step</a>
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <h6>Listing Details</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Size in ft2 (*only numbers)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Lot Size in ft2 (*only numbers)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Rooms (*only numbers)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Bedrooms (*only numbers)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Bathrooms (*only numbers)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Custom ID (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Garages (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Year Built (*numeric)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Garage Size (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Available from (*date)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Basement (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Extra Details (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Roofing (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Exterior Material (*text)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>Structure Type</option>
                                                <option>Not Available</option>
                                                <option>Brick</option>
                                                <option>Wood</option>
                                                <option>Cement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>Floors No</option>
                                                <option>Not Available</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea name="ltn__message" placeholder="Owner/Agent notes (*not visible on front end)"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <h6>Select Energy Class</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>Select Energy Class (EU regulation)</option>
                                                <option>A+</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="Energy Index in kWh/m2a">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper text-center--- mt-0">
                                    <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</button> -->
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Prev Step</a>
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Next Step</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_5">
                            <div class="ltn__product-tab-content-inner">
                                <h6>Amenities and Features</h6>  
                                <h6>Interior Details</h6>                      
                                <div class="row">                                
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Equipped Kitchen
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Gym
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Laundry
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Media Room
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>  
                                <h6 class="mt-20">Outdoor Details</h6>                      
                                <div class="row">                                
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Back yard
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Basketball court
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Front yard
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Garage Attached
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Hot Bath
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Pool
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div> 
                                <h6 class="mt-20">Utilities</h6>                      
                                <div class="row">                                
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Central Air
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Electricity
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Heating
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Natural Gas
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Ventilation
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Water
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div> 
                                <h6 class="mt-20">Other Features</h6>                      
                                <div class="row">                                
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Chair Accessible
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Elevator
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Fireplace
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Smoke detectors
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">Washer and dryer
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="checkbox-item">WiFi
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="alert alert-warning d-none" role="alert">
                                    Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.
                                </div>
                                <div class="btn-wrapper text-center--- mt-30">
                                    <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Prev Step</a>
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit Property</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- APPOINTMENT AREA END -->

<!-- APPOINTMENT AREA START -->
<div class="ltn__appointment-area pb-120 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__appointment-inner">
                    <form action="#">
                        <h2>1. Description</h2>
                        <p><small>These fields are mandatory: Title, Property Media</small></p>
                        <h6>Property Description</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="*Title (mandatory)">
                                </div>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="ltn__message" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <h6>Property Price</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Price in $ (only numbers)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="After Price Label (ex: /month)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Before Price Label (ex: from)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Yearly Tax Rate">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Homeowners Association Fee(monthly)">
                                </div>
                            </div>
                        </div>
                        <h6>Select Categories</h6>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>None</option>
                                        <option>Apartments</option>
                                        <option>Condos</option>
                                        <option>Duplexes</option>
                                        <option>Houses</option>
                                        <option>Industrial</option>
                                        <option>Land</option>
                                        <option>Offices</option>
                                        <option>Retail</option>
                                        <option>Villas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>None</option>
                                        <option>Rentals</option>
                                        <option>Sales</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>no status</option>
                                        <option>Active</option>
                                        <option>hot offer</option>
                                        <option>new offer</option>
                                        <option>open house</option>
                                        <option>sold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <h2>2. Media</h2>
                        <h6>Listing Media</h6>
                        <input type="file" id="myFile" name="filename" class="btn theme-btn-3 mb-10"><br>
                        <p>
                            <small>* At least 1 image is required for a valid submission.Minimum size is 500/500px.</small><br>
                            <small>* PDF files upload supported as well.</small><br>
                            <small>* Images might take longer to be processed.</small>
                        </p>
                        <h6>Video Option</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>Video from</option>
                                        <option>vimeo</option>
                                        <option>youtube</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Embed Video ID">
                                </div>
                            </div>
                        </div>
                        <h6>Virtual Tour</h6>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="ltn__message" placeholder="Virtual Tour:"></textarea>
                        </div>
                        <h2>3. Location</h2>
                        <h6>Listing Location</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="*Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="County / State">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Neighborhood">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Zip">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="property-details-google-map mb-60">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Latitude (for Google Maps)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Longitude (for Google Maps)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="checkbox-item">Enable Google Street View
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Google Street View - Camera Angle (value from 0 to 360)">
                                </div>
                            </div>
                        </div>
                        <h2>4. Details</h2>
                        <h6>Listing Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Size in ft2 (*only numbers)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Lot Size in ft2 (*only numbers)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Rooms (*only numbers)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Bedrooms (*only numbers)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Bathrooms (*only numbers)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Custom ID (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Garages (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Year Built (*numeric)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Garage Size (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Available from (*date)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Basement (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Extra Details (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Roofing (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Exterior Material (*text)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>Structure Type</option>
                                        <option>Not Available</option>
                                        <option>Brick</option>
                                        <option>Wood</option>
                                        <option>Cement</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>Floors No</option>
                                        <option>Not Available</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="ltn__message" placeholder="Owner/Agent notes (*not visible on front end)"></textarea>
                                </div>
                            </div>
                        </div>
                        <h6>Select Energy Class</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select">
                                        <option>Select Energy Class (EU regulation)</option>
                                        <option>A+</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="ltn__name" placeholder="Energy Index in kWh/m2a">
                                </div>
                            </div>
                        </div>
                        <h2>5. Amenities</h2>
                        <h6>Amenities and Features</h6>  
                        <h6>Interior Details</h6>                      
                        <div class="row">                                
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Equipped Kitchen
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Gym
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Laundry
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Media Room
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>  
                        <h6 class="mt-20">Outdoor Details</h6>                      
                        <div class="row">                                
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Back yard
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Basketball court
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Front yard
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Garage Attached
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Hot Bath
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Pool
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> 
                        <h6 class="mt-20">Utilities</h6>                      
                        <div class="row">                                
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Central Air
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Electricity
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Heating
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Natural Gas
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Ventilation
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Water
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> 
                        <h6 class="mt-20">Other Features</h6>                      
                        <div class="row">                                
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Chair Accessible
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Elevator
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Fireplace
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Smoke detectors
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">Washer and dryer
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="checkbox-item">WiFi
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="alert alert-warning d-none" role="alert">
                            Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.
                        </div>
                          <div class="btn-wrapper text-center mt-30">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit Property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- APPOINTMENT AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
@include('frontend.components.call-to-action')
<!-- CALL TO ACTION END -->


@endsection
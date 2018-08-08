@extends('layout')


@section('content')

    <!--contact-->
    <!--Page BGS Image-->
    <div class="row">
        <div class="col-sm-12 bgs hmmBG half-height p-5">
            <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
                <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Contact us</h1>
            </div>
        </div>
    </div>
    <!--About-->
    <div class="container p-5">
        <section class="contactus-one" id="contactus"><!-- Section id-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="map">
                            <iframe frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1435118487834!2d73.09695287259558!3d23.742261243014283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395d97dd1a0a0f73%3A0x1c89ba6d8d4d240!2sBolundra%2C+Gujarat+383421!5e0!3m2!1sen!2sin!4v1500617103857" height="580" width="100%" ></iframe>
                        </div>
                    </div>
                    <div class=" col-md-5 col-sm-6">
                        <div class="contact-block">
                            <div class="dart-headingstyle-one dart-mb-20">  <!--Style 1-->
                                <h2 class="dart-heading">Form</h2>
                            </div>

                            <div class="contact-form"><!-- contact form -->
                                <form class="row" action="send_email.php" id="contact" name="contact" method="post" >
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your Name" required >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Your Email" required >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Web Site (Optional)" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="InputMessage" id="InputMessage" rows="4" placeholder="Message" required  ></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn normal-btn dart-btn-xs">SEND MESSAGE</button>
                                    </div>
                                </form>
                            </div>

                            <hr>

                            <div class=" row contact-info">
                                <div class="col-md-12 col-sm-12">
                                    <p class="addre"><i class="fa fa-map-marker"></i>AT & PO. BOLUNDRA (R) TA.IDAR ,DIST.S.K GUJARAT INDIA - 383421</p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+10484579845">+12 345 789 1234</a></p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <p class="mail-id"><i class="fa fa-envelope"></i>contact@yourcompany.com</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

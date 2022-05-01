<div class="row">
            <div class="col-md-7 px-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.4678437343537!2d78.4530364!3d17.4373079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb913ed4b2d2a7%3A0x6800fb65c891f411!2sSphoorthi%20Kutumbam!5e0!3m2!1sen!2sin!4v1651071323834!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="card col-md-5 bg-light-1 border-0 rounded-0 p-3">
              <h2>Contact us</h2>
              <h4 class="">Sphoorthi Kutumbam</h4>
              <p class="mb-0">(A Registered Spiritual Scientific and Humanitarian Charitable Trust)</p>
              <p class="">Regd. No. 161/IV/2021</p>
              <ul class="contact_list px-1">
                <li>#301, Rama Towers</li>
                <li>Shyam Karan Road, Ameerpet,</li>
                <li>Hyderabad - 500016, Telangana</li>
                <li>Phone: +91 89776 13435, +91 89775 13435
                <li>Email: <a href="office@sphoorthikutumbam.org">office@sphoorthikutumbam.org</a></li>
                <li><a href="www.sphoorthikutumbam-telangana.org">www.sphoorthikutumbam-telangana.org</a></li>
                </li>
              </ul>
            </div>
      </div>
     <div class="row">
      <div class="col-md-12 text-center">
        <div class="mx-auto text-center">
          <ul class="nav mx-auto justify-content-center py-5">
            <li class="me-3"><a href="privacy-policy" class="color-gray text-decoration-none fw-600 text-uppercase me-3 fs-6">PRIVACY POLICY</a></li>
            <li class="me-3"><a href="termsand_conditions" class="color-gray text-decoration-none fw-600 text-uppercase me-3 fs-6">Terms&Conditions</a></li>
          </ul>
          <div class="py-2">
            <h5 class="fw-bold mb-4">FOLLOW US ON</h5>
            <ul class="nav justify-content-center mb-5">
              <li><a href="https://www.facebook.com/Love-the-life-Like-the-people-Live-in-peace-1621054878180055" class="me-4"><img src="assets/img/facebook.png" width="32px" alt="facebook"></a></li>
              <li><a href="https://www.youtube.com/c/srisrisriguruviswasphoorthiorg" class="me-4"><img src="assets/img/youtube.png" width="32px" alt="facebook"></a></li>
            </ul>
          </div>
        </div>
      </div>
     </div>
    </div>
    <footer class="bg-light-1 px-md-5 py-4 text-center border-top">
      <p class="my-0 py-1 fw-600 text-light-1 text-center">Copyright  &copy;2022 <span class="color-danger">Sphoorthi Kutumbam Telangana</span>, All rights reserved</p>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0 shadow-1">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><span class="fw-bold">Membership type: </span> Individual</p>
        <p><span class="fw-600">Amount to be paid:</span> 800</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fs-14" data-bs-dismiss="modal">cancel</button>
        <button type="button" class="btn bg-danger-1 fs-14 text-white">Procced to pay</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#member_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          fname: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            lname: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            dob: {
                validators: {
                    notEmpty: {
                        message: 'The Date of Birth is required',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            occupation: {
                validators: {
                    notEmpty: {
                        message: 'The occupation is required',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            designation: {
                validators: {
                    notEmpty: {
                        message: 'The designation is required',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            department: {
                validators: {
                    notEmpty: {
                        message: 'The department is required',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            organization: {
                validators: {
                    notEmpty: {
                        message: 'Please enter organization name',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            houseno: {
                validators: {
                    notEmpty: {
                        message: 'Please enter  houseno',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            street1: {
                validators: {
                    notEmpty: {
                        message: 'Please enter  street1',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            locality: {
                validators: {
                    notEmpty: {
                        message: 'Please enter locality',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            towncity: {
                validators: {
                    notEmpty: {
                        message: 'Please enter town/city',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'Please enter pincode',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your state',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'Please enter country name',
                        rules:{
                          required: true,
                          minlength: 1,
                        }
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter email',
                        rules:{
                          required: true,
                          minlength: 1,
                        },
                        email: "Please enter a valid email address!"
                    }
                }
            },
            phone1: {
                validators: {
                    notEmpty: {
                        message: 'Please enter phone number',
                        rules:{
                          required: true,
                          minlength: 10,
                        }
                    }
                }
            },
            phone2: {
                validators: {
                    notEmpty: {
                        message: 'Please enter lternate phone number',
                        rules:{
                          required: true,
                          minlength: 10,
                        }
                    }
                }
            },
            whatsapp: {
                validators: {
                    notEmpty: {
                        message: 'Please enter whatsapp number',
                        rules:{
                          required: true,
                          maxlength: 10,
                        }
                    }
                }
            },
            memtitle: {
                validators: {
                    notEmpty: {
                        messages: {
                          memtitle: { valueNotEquals: "Please select an item!" }
                        },
                        rules:{
                          memtitle: { valueNotEquals: "default" }
                        }
                    }
                }
            },
            declaremyself: {
                validators: {
                    notEmpty: {
                        message: 'Please confirm declaration',
                        rules: {
                          required: true
                      }
                    }
                }
            },
            chooseMemship:{
              validators: {
                        notEmpty: {
                            message: 'Please choose membership',
                            rules: {
                              required: true
                          }
                        }
                    }
            }
        },
        chooseMemship:{
          validators: {
                    notEmpty: {
                        message: 'Please choose membership',
                        rules: {
                          chooseMemship:{required: true}
                      }
                    }
                }
        }
    });
    // if($('.validationRadio').hassClass('.has-error')){
    //   $('.memshipError').removeClass('d-none')
    // }
    // if ($('.validationRadio').hasClass("has-error'")) {
    //   $('.memshipError').removeClass('d-none')
    //   $('.memshipError').addClass('d-block')
    // }
  //   $('body').on('keyup', '.phoneValidation', function () {
  //   var $input = $(this),
  //       value = $input.val(),
  //       length = value.length,
  //       inputCharacter = parseInt(value.slice(-1));

  //   if (!((length > 1 && inputCharacter >= 0 && inputCharacter <= 9) || (length === 1 && inputCharacter >= 7 && inputCharacter <= 9))) {
  //       $input.val(value.substring(0, length - 1));
  //    }
  // });
});
</script>
</html>
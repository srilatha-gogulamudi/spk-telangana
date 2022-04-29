<?php
    include_once 'components/header.php';
    require_once 'components/membership_list.php'
?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center px-0">
       <div class="mem-banner-1">
        <h1 class="fw-600 color-danger ps-5">Join sphoorthikutumbam</h1>
        <!-- <h1 class="fw-600 color-danger ps-5">Complete your registration</h1> -->
        <!-- <p class="custom-lh-2">Sphoorthi Kutumbam Trust (Telangana) offers membership in four different categories based on the nature of association of individuals with the trust</p> -->
       </div>
      </div>
    </div>
    <form id="member_form" method="POST" action="pay.php">
    <div class="row bg-white">
      <div class="col-md-10 mx-auto">
        <ul class="nav nav-pills justify-content-between w-100 mb-0 mem-nav-pills" id="pills-tab" role="tablist">
          <?php foreach($membership_grp as $key=>$value): ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold text-light-1 text-uppercase fs-14 py-3 <?= $active_tab == $value['m_type'] ? 'active' : '' ?>" data-bs-toggle="pill" data-bs-target="#<?= $value['m_type']; ?>" type="button" role="tab" aria-controls="<?= $value['m_type']; ?>" aria-selected="false"><?= $value['m_name']; ?></button>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="tab-content" id="pills-tabContent">
          <div class="row mt-5 mb-0">
            <div class="col-md-12">
              <h3 class="fw-bold">1. Choose a Period</h3>
            </div>
          </div>
          <?php foreach($membership_grp as $key=>$value): ?>
          <div class="tab-pane fade <?= $active_tab == $value['m_type'] ? 'show active' : '' ?>" id="<?= $value['m_type'] ?>" role="tabpanel" aria-labelledby="pills-young-tab">
            <div class="row">
              <div class="col-md-12">
                <div class="row row-cols-2 row-cols-md-4 g-4 my-3">
                  <?php foreach($membership_list[$value['m_type']] as $k=>$val): ?>
                  <div class="col">
                    <div class="card border-0 shadow br-8 h-200">
                      <div class="card-body">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="chooseMemship" id="<?= $val['m_id'] ?>">
                          <label class="form-check-label fw-bold chooseMemship" for="<?= $val['m_id'] ?>">
                          <?= $val['m_tenure'] == 0 ? 'LIFETIME' : ($val['m_tenure'] . ' YEAR' . ($val['m_tenure'] > 1 ? 'S' : '')) ?>
                          </label>
                          </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-middle align-items-center h-90">
                          <h3 class="card-text fw-bold text-light-1">RS <?= $val['m_price'] ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="row form-wrapper mb-5">
      <div class="col-md-10 mx-auto">
        
            <h4 class="fw-bold my-5">2. Member Details</h4>
        <div class="card border-0 shadow br-8">
          <div class="card-body">
            <h4 class="fw-bold my-4">Personal Details</h4>
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="memtitle" class="form-label">Title(Mr/Mrs/Ms/Dr/Prof/etc)</label>
                  <select class="form-select" id="memtitle" name="memtitle" aria-label="Default select example" required>
                    <option selected>Select one of the options</option>
                    <option value="1">Mr</option>
                    <option value="2">Mrs</option>
                    <option value="3">Ms</option>
                    <option value="3">Dr</option>
                    <option value="3">Prof</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" id="fname" aria-describedby="doahelp" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lname" id="lname" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" name="dob" id="dob" aria-describedby="doahelp">
                </div>
              </div>
            </div>
            <h4 class="fw-bold my-4">Work/Profession</h4>
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="occupation" class="form-label">Occupation</label>
                  <input type="text" class="form-control" name="occupation" id="occupation" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="designation" class="form-label">Designation</label>
                  <input type="text" class="form-control" name="designation" id="designation" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="department" class="form-label">Department / Industry</label>
                  <input type="text" class="form-control" name="department" id="department" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="organization" class="form-label">Organization</label>
                  <input type="text" class="form-control" name="organization" id="organization" aria-describedby="doahelp">
                </div>
              </div>
            </div>
            <h4 class="fw-bold my-4">Full Address</h4>
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="houseno" class="form-label">House No</label>
                  <input type="text" class="form-control" name="houseno" id="houseno" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="street1" class="form-label">Street 1</label>
                  <input type="text" class="form-control" name="street1" id="street1" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="street2" class="form-label">Street 2</label>
                  <input type="text" class="form-control" name="street2" id="street2" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="locality" class="form-label">Locality</label>
                  <input type="text" class="form-control" name="locality" id="locality" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="towncity" class="form-label">Town/City</label>
                  <input type="text" class="form-control" name="towncity" id="towncity" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="pincode" class="form-label">Pin Code</label>
                  <input type="text" class="form-control" name="pincode" id="pincode" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="state" class="form-label">State</label>
                  <input type="text" class="form-control" name="state" id="state" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="country" class="form-label">Country</label>
                  <input type="text" class="form-control" name="country" id="country" aria-describedby="doahelp">
                </div>
              </div>
            </div>
            <h4 class="fw-bold my-4">Contact Details</h4>
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="email" class="form-label">Email ID</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="phone1" class="form-label">Phone 1</label>
                  <input type="text" class="form-control" name="phone1" id="phone1" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="phone2" class="form-label">Phone 2</label>
                  <input type="text" class="form-control" name="phone2" id="phone2" aria-describedby="doahelp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label for="whatsapp" class="form-label">Whatsapp No</label>
                  <input type="text" class="form-control" name="whatsapp" id="whatsapp" aria-describedby="doahelp">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="form-check declaration">
                <input class="form-check-input" name="declaremyself" type="checkbox" value="" id="declaremyself">
                <label class="form-check-label" for="declaremyself">
                I hereby declare that the information povides is true to the best of my knowldge. I will abide by the member guidelines and code of conduct of sphoorthi kutumbam
                </label>
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 me-auto">
                <div class="d-flex justify-content-end py-3">
                  <button type="button" class="btn btn-secondary rounded-0 fs-14 ls-1 fw-600 px-4 me-3">CANCEL</button>
                  <button type="submit" class="btn bg-danger-1 text-white fs-14 ls-1 fw-600 px-4" id="continueBtn">CONTINUE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </form>
<?php
    include_once 'components/footer.php';
?>
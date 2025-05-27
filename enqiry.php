<?php
include "header.php";
?>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>enqiry</h1>
        <!-- <span>enqiry for customer</span> -->
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container mt-5">
        <h2 class="text-center">Loan Inquiry Form</h2>
        <form>
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>

           
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>

           

           

            <div class="mb-3">
                <label for="loanType" class="form-label">Loan Type</label>
                <select class="form-select" id="loanType" required>
                    <option value="">Select loan type</option>
                    <option value="personal">Personal Loan</option>
                    <option value="home">Home Loan</option>
                    <option value="car">Car Loan</option>
                    <option value="business">Business Loan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">message</label>
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                    required=""></textarea>
                </fieldset>
            </div>

            <button type="submit" class="btn btn-primary  w-100">Submit Inquiry</button>
        </form>
    </div>

    <?php
    include "footer.php";
    ?>
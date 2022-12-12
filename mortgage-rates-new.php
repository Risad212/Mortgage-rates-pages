<?php
include_once("common/config.php");
$sql="SELECT bank_rate, our_rate FROM mortgage_rates WHERE term_id=9 OR term_id=11";
$query=$dbConn->query($sql);
$i=1;
while ($mortgage_rates=$query->fetch_assoc()){
    if($i==1){
       $variable_bank_rate= $mortgage_rates['bank_rate'];
       $variable_our_rate= $mortgage_rates['our_rate'];
    }
    if($i==2){
       $fixed_1yr_open_rate= $mortgage_rates['our_rate'];
    }
$i++;}
$query->free();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mortgage Rates | Sunlitemortgage Alliance </title>
  <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="<?php echo $sSiteURL;?>media/common/apple-touch-icon-192x192.png" />
  <link rel="apple-touch-icon" type="image/png" sizes="512x512" href="<?php echo $sSiteURL;?>media/common/apple-touch-icon-512x512.png" />
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo $sSiteURL;?>media/common/icon-64x64.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $sSiteURL;?>asset/css/style.css">
</head>
<body>
<?php include_once('common/header.php'); ?>

<!-- banner start -->
<div class="mortgage-rates-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h2>Our Exclusive Rates</h2>
                </div>
                <div class="col-md-5">
                    <p class="mortgage-rates-intro-p">
                        By choosing a Mortgage Alliance Professional you can access all your mortgage options with just
                        one phone call, one application. Your Mortgage Alliance Professional works
                        on your behalf. They will place your mortgage with the lender that is the best fit for you,
                        whether it’s a major bank or a private lender.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!-- banner End -->

    <!-- rates body style-->
    <div class="mortgage-rates-body">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="mortgage-rates-body-text">
                        <h4>Today's Mortgage Alliance Exclusive Rates</h4>
                        <p>As of November 6, 2022</p>
                    </div>
                    <!-- navbar button  -->
                    <ul class="mb-3 d-flex justify-content-center nav" id="myTab" role="tablist">
                        <li>
                            <button class="btn-rate-fixed nav-link active" id="fixed-tab" data-bs-toggle="tab"
                                data-bs-target="#fixed-tab-pane" type="button" role="tab" aria-controls="fixed-tab-pane"
                                aria-selected="true">
                                fixed
                            </button>
                        </li>
                        <li>
                            <button class="btn-rate-fixed nav-link" id="variable-tab" data-bs-toggle="tab"
                                data-bs-target="#variable-tab-pane" type="button" role="tab"
                                aria-controls="variable-tab-pane" aria-selected="true">
                                variable
                            </button>
                        </li>
                    </ul>
                </div>
                <!--./col-8-->
            </div>
            <!--./row -->
        </div>
        <!--./container -->
    </div>


    <!--tab started -->
    <div class="tab-content" id="myTabContent">
        <!--========== Fixed TAB start ==========-->
        <div class="mt-4 tab-pane fade show active" id="fixed-tab-pane" role="tabpanel" aria-labelledby="fixed-tab"
            tabindex="0">
            <div class="container">
                <div class="row">
                    <div class="col-6 m-auto">
                        <div class="row" id="fixed_row">
                            <div class="col-3">
                                <div class="card">
                                    <a href="#" target="_blank">
                                        <div class="card-body">
                                            <div class="card-title h5 d-flex justify-content-center rates-buttons__rate"
                                                data-key="fixed1Yr">
                                                <h5 class="counter" id="fixed1Yr">5.69</h5>
                                                %
                                            </div>
                                            <p class="card-text">1 year fixed</p>
                                            <button type="button" class="btn btn-primary">&gt;</button>
                                        </div>
                                    </a>
                                </div>
                                <p class="card-text">
                                    Posted <br />
                                    <span id="posted_fixed_1_yr"> 6.09</span>%
                                </p>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <a href="https://www.mortgageboss.ca/leadgeneration/add_lead.aspx?Agent_ID=26036"
                                        target="_blank">
                                        <div class="card-body">
                                            <div class="card-title h5 d-flex justify-content-center">
                                                <h5 class="counter" id="fixed3Yr">5.54</h5>
                                                %
                                            </div>
                                            <p class="card-text">3 year fixed</p>
                                            <button type="button" class="btn btn-primary">&gt;</button>
                                        </div>
                                    </a>
                                </div>
                                <p class="card-text">
                                    Posted <br />

                                    <span id="posted_fixed_3_yr"> 5.79</span>%
                                </p>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <a href="https://www.mortgageboss.ca/leadgeneration/add_lead.aspx?Agent_ID=26036"
                                        target="_blank">
                                        <div class="card-body">
                                            <div class="card-title h5 d-flex justify-content-center">
                                                <h5 class="counter" id="fixed5Yr">5.19</h5>
                                                %
                                            </div>
                                            <p class="card-text" id="fixed_5_yr">5 year fixed</p>
                                            <button type="button" class="btn btn-primary">&gt;</button>
                                        </div>
                                    </a>
                                </div>
                                <p class="card-text">
                                    Posted <br />

                                    <span id="posted_fixed_5_yr"> 6.34</span>%
                                </p>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <a href="https://www.mortgageboss.ca/leadgeneration/add_lead.aspx?Agent_ID=26036"
                                        target="_blank">
                                        <div class="card-body">
                                            <div class="card-title h5 d-flex justify-content-center">
                                                <h5 class="counter" id="fixed7Yr">5.84</h5>
                                                %
                                            </div>
                                            <p class="card-text">7 year fixed</p>
                                            <button type="button" class="btn btn-primary">&gt;</button>
                                        </div>
                                    </a>
                                </div>
                                <p class="card-text">
                                    Posted <br />
                                    <span id="posted_fixed_7_yr"> 6.6</span>%
                                </p>
                            </div>
                        </div>
                        <br />
                        <br />
                        <p class="text-center mb-5">Rates may vary provincially and are subject to change without notice
                            OAC.</p>
                    </div>
                </div>
            </div>
            <!-- devider start -->
            <section class="rates-divider">
                <h2 class="max-width">Fixed vs. Variable: Which is best for you?</h2>
            </section>
            <!-- devider End -->

            <!--rates-compare__header-->
            <div class="rates-compare__header max-width">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="rates-compare__header-desc">
                            <p>This rate will stay the same over the course of your term regardless of market
                                fluctuations.
                                Fixed Rate Mortgages can be open or closed.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="rates-compare__header-heading text-center">
                            <h3>Fixed Residential Rate</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--./rates compare header -->


            <!-- rates compare content -->
            <div class="rates-compare__content max-width">
                <div class="row">
                <div class="col-md-6">
                <div class="rates-compare__list">
                    <h3>You may want a closed fixed rate if…</h3>
                    <ul>
                        <li>If you believe that interest rates will rise - you will be protected against an increase.
                        </li>
                        <li>If you have a low threshold of tolerance for market fluctuation.</li>
                        <li>If you prefer to have the same payment over the course of your term.</li>
                        <li>If you don't intend to make any or very few prepayments of your mortgage principal.</li>
                        <li>If you don't plan to sell your home in the near future.</li>
                    </ul>
                </div>
            </div>
                <div class="col-md-6">
                <div class="rates-compare__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Term</th>
                                <th>Posted Rate</th>
                                <th>Mortgage Alliance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1yr (closed)</td>
                                <td>6.09%</td>
                                <td data-key="fixed1Yr">
                                    <span>5.69%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2yr (closed)</td>
                                <td>5.79%</td>
                                <td data-key="fixed2Yr">
                                    <span>5.64%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3yr (closed)</td>
                                <td>5.79%</td>
                                <td data-key="fixed3Yr">
                                    <span>5.54%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4yr (closed)</td>
                                <td>6.09%</td>
                                <td data-key="fixed4Yr">
                                    <span>5.44%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>5yr (closed)</td>
                                <td>6.34%</td>
                                <td data-key="fixed5Yr">
                                    <span>5.09%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>7yr (closed)</td>
                                <td>6.60%</td>
                                <td data-key="fixed7Yr">
                                    <span>5.84%</span>
                                </td>
                            </tr>
                            <tr>
                                <td>10yr (closed)</td>
                                <td>6.85%</td>
                                <td data-key="fixed10Yr">
                                    <span>6.00%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               </div>
          </div>
         </div>

            <!-- rates compare content tow -->
            <div class="rates-compare__content max-width">
                <div class="rates-compare__list">
                    <h3>You may want a closed fixed rate if…</h3>
                    <ul>
                        <li>If you plan to sell your home in the near future.</li>
                        <li>If you intend to make prepayment of more than 20% of your mortgage principal.</li>
                        <li>If you prefer to have the same payment over the course of your term.</li>
                    </ul>
                </div>
                <div class="rates-compare__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Term</th>
                                <th>Posted Rate</th>
                                <th>Mortgage Alliance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="vTerm">1yr (closed)</td>
                                <td id="VPostedRate">6.30%</td>
                                <td id="VMAlience">6.30%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--====== fixed tab end ========-->
        </div>

        <!--==========VARIABLE TAB start ==========-->
        <div class="mt-4 tab-pane fade" id="variable-tab-pane" role="tabpanel" aria-labelledby="variable-tab"
            tabindex="0">
            <div class="mt-4 tab-pane fade show active" id="fixed-tab-pane" role="tabpanel" aria-labelledby="fixed-tab"
                tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-6 m-auto">
                            <div class="row" id="fixed_row">
                                <div class="col-md-3 m-auto">
                                    <div class="card">
                                        <a href="#" target="_blank">
                                            <div class="card-body">
                                                <div class="card-title h5 d-flex justify-content-center rates-buttons__rate"
                                                    data-key="fixed1Yr">
                                                    <h5 class="counter" id="fixed1Yr">5.86</h5>
                                                    %
                                                </div>
                                                <p class="card-text">1 year fixed</p>
                                                <button type="button" class="btn btn-primary">&gt;</button>
                                            </div>
                                        </a>
                                    </div>
                                    <p class="card-text">
                                        Posted <br />
                                        <span id="posted_fixed_1_yr">6.45%</span>
                                    </p>
                                </div>
                            </div>
                            <br />
                            <br />
                            <p class="text-center mb-5">Rates may vary provincially and are subject to change without
                                notice OAC.</p>
                        </div>
                    </div>
                </div>
                <!-- devider start -->
                <section class="rates-divider">
                    <h2 class="max-width">Fixed vs. Variable: Which is best for you?</h2>
                </section>
                <!-- devider End -->

                <!-- rates compare header -->
                <div class="rates-compare__header max-width">
                    <div class="rates-compare__header-desc">
                        <p>This rate will stay the same over the course of your term regardless of market fluctuations.
                            Fixed Rate Mortgages can be open or closed.</p>
                    </div>
                    <div class="rates-compare__header-heading text-center">
                        <h3>Fixed Residential Rate</h3>
                    </div>
                </div>


                <!-- rates compare content tow -->
                <div class="rates-compare__content max-width">
                    <div class="rates-compare__list">
                        <h3>You may want a closed fixed rate if…</h3>
                        <ul>
                            <li>If you plan to sell your home in the near future.</li>
                            <li>If you intend to make prepayment of more than 20% of your mortgage principal.</li>
                            <li>If you prefer to have the same payment over the course of your term.</li>
                        </ul>
                    </div>
                    <div class="rates-compare__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Term</th>
                                    <th>Posted Rate</th>
                                    <th>Mortgage Alliance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="vTerm">5yr</td>
                                    <td id="VPostedRate">6.45%</td>
                                    <td id="VMAlience">5.55%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--====== varible tab end ========-->
            </div>
            <!--======  tab container end ========-->
        </div>
    </div>
    <!--tab End -->


<?php include_once('common/footer.php'); ?>
<!-- ===========  javaScript files ================ -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="<?php echo $sSiteURL;?>asset/js/counter.js"></script>
<script src="<?php echo $sSiteURL;?>asset/js/jquery.counterup.js"></script>
<script src="<?php echo $sSiteURL;?>asset/js/jquery.waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Javascript -->
<script>
    // Back to Top
    let backToTopButton = document.getElementById("back_to_top");
    window.onscroll = function() {
        if (window.pageYOffset > 100) {
            backToTopButton.className = "show";
        } else {
            backToTopButton.className = "";
        }
    };
    backToTopButton.onclick = function () {
        window.scrollTo({
            top: 0,
            left:0,
            behavior: 'smooth'
        });
    }
  //add class
  function myFunction() {
     var element = document.getElementById("mortgage-rates");
     element.classList.add("active");
  }
  myFunction();
</script>
</body>
</html>

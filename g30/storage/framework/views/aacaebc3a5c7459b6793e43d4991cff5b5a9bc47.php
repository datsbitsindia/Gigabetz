<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
HOME
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <div class="col-md-9 ml-sm-auto col-lg-10">
            <div class="all-page-box">
                <div class="all-page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Stock</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Market</li>
                        </ol>
                    </nav>
                </div>
                <div class="stock-box">
                    <div class="stock-m-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="bse-tab" data-toggle="tab" href="#bse" role="tab" aria-controls="bse" aria-selected="true">Bse</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="nse-tab" data-toggle="tab" href="#nse" role="tab" aria-controls="nse" aria-selected="false">Nse</a>
                          </li>
                        </ul>
                    </div>
                    
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="bse" role="tabpanel" aria-labelledby="bse-tab">
                        <div class="row">
                            <div class="col-lg-12 mx-auto bg-black rounded">
                                <div class="table-responsive">
                                    <table class="table table-fixed table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">CURRENT VALUE   </th>
                                                <th scope="col">CHANGE</th>
                                                <th scope="col">% CHG </th>
                                                <th scope="col">OPEN </th>
                                                <th scope="col">HIGH </th>
                                                <th scope="col">LOW </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">SENSEX</a>
                                                </td>
                                                <td><span class="green_txt">45,881.52</span></td>
                                                <td><span class="green_txt">273.01</span>   </td>
                                                <td><span class="green_txt">0.60</span></td>
                                                <td>45,891.04</td>
                                                <td>45,989.98</td>
                                                <td>45,792.01</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">S&amp;P BSE Smallcap</a></td>
                                                <td><span class="green_txt">17,598.08</span></td>
                                                <td><span class="green_txt">106.47</span></td>
                                                <td><span class="green_txt">0.61</span></td>
                                                <td>17,588.18</td>
                                                <td>17,627.38</td>
                                                <td>17,571.80</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">S&amp;P BSE Midcap</a></td>
                                                <td><span class="green_txt">17,623.10</span></td>
                                                <td><span class="green_txt">97.82</span></td>
                                                <td><span class="green_txt">0.56</span></td>
                                                <td>17,613.06</td>
                                                <td>17,676.88</td>
                                                <td>17,605.25</td>
                                            </tr>
                                            <tr>
                                              <td><a href="#">S&amp;P BSE SmallCap Select Index</a></td>
                                              <td><span class="green_txt">3,144.20</span></td>
                                              <td><span class="green_txt">15.03</span></td>
                                              <td><span class="green_txt">0.48</span></td>
                                              <td>3,143.85</td>
                                              <td>3,148.74</td>
                                              <td>3,134.12</td>
                                            </tr>
                                            <tr>
                                              <td><a href="#">S&amp;P BSE MidCap Select Index</a></td>
                                              <td><span class="green_txt">7,469.43</span></td>
                                              <td><span class="green_txt">45.58</span></td>
                                              <td><span class="green_txt">0.61</span></td>
                                              <td>7,460.64</td>
                                              <td>7,497.50</td>
                                              <td>7,460.22</td>
                                            </tr>
                                            <tr>
                                              <td><a href="#">S&amp;P BSE LargeCap</a></td>
                                              <td><span class="green_txt">5,170.43</span></td>
                                              <td><span class="green_txt">31.81</span></td>
                                              <td><span class="green_txt">0.62</span></td>
                                              <td>5,168.32</td>
                                              <td>5,178.61</td>
                                              <td>5,161.61</td>
                                            </tr>
                                            <tr>
                                              <td><a href="#">S&amp;P BSE AllCap</a></td>
                                              <td><span class="green_txt">5,045.45</span></td>
                                              <td><span class="green_txt">30.62</span></td>
                                              <td><span class="green_txt">0.61</span></td>
                                              <td>5,043.19</td>
                                              <td>5,053.18</td>
                                              <td>5,038.99</td>
                                            </tr>
                                            <tr>
                                              <td><a href="#">S&amp;P BSE 100</a></td>
                                              <td><span class="green_txt">13,613.79</span></td>
                                              <td><span class="green_txt">87.45</span></td>
                                              <td><span class="green_txt">0.65</span></td>
                                              <td>13,604.14</td>
                                              <td>13,633.77</td>
                                              <td>13,588.57</td>
                                            </tr>
                                            <tr>
                                              <td><a href="#">S&amp;P BSE 200</a></td>
                                              <td><span class="green_txt">5,713.92</span></td>
                                              <td><span class="green_txt">34.28</span></td>
                                              <td><span class="green_txt">0.60</span></td>
                                              <td>5,711.68</td>
                                              <td>5,722.60</td>
                                              <td>5,706.11</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End -->
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nse" role="tabpanel" aria-labelledby="nse-tab">
                        <div class="row">
                            <div class="col-lg-12 mx-auto bg-black rounded">
                                <div class="table-responsive">
                                    <table class="table table-fixed table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">CURRENT VALUE   </th>
                                                <th scope="col">CHANGE</th>
                                                <th scope="col">% CHG </th>
                                                <th scope="col">OPEN </th>
                                                <th scope="col">HIGH </th>
                                                <th scope="col">LOW </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">NIFTY 50</a></td>
                                                <td><span class="green_txt">13,491.70</span></td>
                                                <td><span class="green_txt">98.75</span></td>
                                                <td><span class="green_txt">0.74</span></td>
                                                <td>13,458.10</td>
                                                <td>13,501.15</td>
                                                <td>13,449.60</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY NEXT 50</a></td>
                                                <td><span class="green_txt">31,820.60</span></td>
                                                <td><span class="green_txt">106.20</span></td>
                                                <td><span class="green_txt">0.33</span></td>
                                                <td>31,893.20</td>
                                                <td>31,960.05</td>
                                                <td>31,784.95</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY Midcap 100</a></td>
                                                <td><span class="green_txt">20,595.05</span></td>
                                                <td><span class="green_txt">166.60</span></td>
                                                <td><span class="green_txt">0.82</span></td>
                                                <td>20,582.40</td>
                                                <td>20,640.90</td>
                                                <td>20,554.75</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY MIDCAP 50</a></td>
                                                <td><span class="green_txt">5,801.75</span></td>
                                                <td><span class="green_txt">43.45</span></td>
                                                <td><span class="green_txt">0.75</span></td>
                                                <td>5,798.20</td>
                                                <td>5,816.30</td>
                                                <td>5,784.40</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY 100</a></td>
                                                <td><span class="green_txt">13,622.40</span></td>
                                                <td><span class="green_txt">92.55</span></td>
                                                <td><span class="green_txt">0.68</span></td>
                                                <td>13,597.05</td>
                                                <td>13,633.70</td>
                                                <td>13,589.85</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY 500</a></td>
                                                <td><span class="green_txt">11,165.70</span></td>
                                                <td><span class="green_txt">77.05</span></td>
                                                <td><span class="green_txt">0.69</span></td>
                                                <td>11,147.55</td>
                                                <td>11,174.25</td>
                                                <td>11,143.45</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY AUTO</a></td>
                                                <td><span class="green_txt">9,314.90</span></td>
                                                <td><span class="green_txt">17.05</span></td>
                                                <td><span class="green_txt">0.18</span></td>
                                                <td>9,331.70</td>
                                                <td>9,345.05</td>
                                                <td>9,294.10</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY BANK</a></td>
                                                <td><span class="green_txt">30,535.70</span></td>
                                                <td><span class="green_txt">273.80</span></td>
                                                <td><span class="green_txt">0.90</span></td>
                                                <td>30,335.05</td>
                                                <td>30,552.35</td>
                                                <td>30,326.70</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">NIFTY ENERGY</a></td>
                                                <td><span class="green_txt">17,118.20</span></td>
                                                <td><span class="green_txt">150.65</span></td>
                                                <td><span class="green_txt">0.89</span></td>
                                                <td>17,088.25</td>
                                                <td>17,165.15</td>
                                                <td>17,026.80</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End -->
                            </div>
                        </div>
                      </div>
                    </div>
                    
                                        
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jalpesh\g30\resources\views/stock.blade.php ENDPATH**/ ?>
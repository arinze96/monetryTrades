<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config("app.name") }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                  <div class="container-fluid">
                   <div class="nk-content-inner">
                    <div class="nk-content-body">
                     <div class="components-preview wide-md mx-auto">
                      <div class="nk-block-head nk-block-head-lg wide-sm">
                       <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h3 class="nk-block-title fw-normal text-center">DEPOSIT ON YOUR RETIREMENT ACCOUNT</h3>
                       </div>
                      </div>
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner" style="background-color: #798bff">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form action="{{ route("user.retirement_account") }}" method="POST">
                            @csrf
                            <div class="row">
      
                              <div class="col-sm-12  form-row">
                                @if (!empty($success))
                                <span class="info_box text-success">{{ $success }}</span>
                                @endif
                              </div>
                            
                              <div class="col-sm-12  form-row">
                                @if (!empty($error))
                                <span class="info_box text-danger">{{ $error }}</span>
                                @endif
                              </div>
                              
                            <div class="col-sm-6 col-md-6 mb-2">
                             <div class="form-group">
                              <label class="form-label" style="color: white" for="firstname">Firstname</label>
                              <div class="form-control-wrap">
                               <input required="" type="text"  class="form-control" name="firstname"  
                               value="{{ $userDetails->firstname }}"
                                placeholder="Enter firstname">
                              </div>
                              @error('firstname')
                              <span class="text-danger" id="error_name">{{ $message }}</span>
                              @enderror
                             </div>
                            </div>

                                        
                            <div class="col-sm-6 col-md-6 mb-2">
                              <div class="form-group">
                               <label class="form-label" style="color: white" for="lastname">Lastname</label>
                               <div class="form-control-wrap">
                                <input required="" type="text"  class="form-control" name="lastname"  
                                value="{{ $userDetails->lastname }}"
                                 placeholder="Enter lastname">
                               </div>
                               @error('lastname')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>
             
        

                             <div class="col-sm-6 col-md-6 mb-2">
                              <div class="form-group">
                               <label class="form-label" style="color: white" for="email">Email</label>
                               <div class="form-control-wrap">
                                <input required="" type="email"  class="form-control" name="email"  
                                value="{{ $userDetails->email }}"
                                 placeholder="Enter email">
                               </div>
                               @error('email')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-6 mb-2">
                                <div class="form-group">
                                 <label class="form-label" style="color: white" for="phone">Phone</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text"  class="form-control" name="phone"  
                                  value="{{ $userDetails->phone }}"
                                   placeholder="Enter Phone Number">
                                 </div>
                                 @error('phone')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                             <div class="col-sm-6 col-md-6 mb-2">
                              <div class="form-group">
                               <label class="form-label" style="color: white" for="phone">Next of Kin</label>
                               <div class="form-control-wrap">
                                <input required="" type="text"  class="form-control" name="next_of_kin"  
                                value="{{ old("next_of_kin") }}"
                                 placeholder="Enter The Name Of Your Next of Kin">
                               </div>
                               @error('next_of_kin')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-6 mb-2">
                                <div class="form-group">
                                 <label class="form-label" style="color: white" for="currency">Payment Method</label>
                                 <div class="form-control-wrap">
                                   <select name="currency" id="strategySelect" class="form-control">
                                    <option value="" disabled selected hidden>Payment Method</option>
                                    <option value="BTC">BTC</option>
                                    <option value="USD">USD</option>
                                    <option value="ETH">ETH</option>
                                </select>
                                 </div>
                                 @error('currency')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-6 mb-2">
                                <div class="form-group">
                                 <label class="form-label" style="color: white" for="phone">Amount</label>
                                 <div class="form-control-wrap">
                                   <select name="amount" id="strategySelect" class="form-control">
                                    <option value="" disabled selected hidden>Amount</option>
                                    <option value="5000">$5,000</option>
                                    <option value="7000">$7,000</option>
                                    <option value="10000">$10,000</option>
                                    <option value="15000">$15,000</option>
                                    <option value="25000">$25,000</option>
                                    <option value="35000">$35,000</option>
                                    <option value="50000">$50,000</option>
                                    <option value="100000">$100,000</option>
                                    <option value="500000">$500,000</option>
                                    <option value="1000000">$1,000,000</option>
                                    
                                </select>
                                 </div>
                                 @error('amount')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-6 mb-2">
                                <div class="form-group">
                                 <label class="form-label" style="color: white" for="phone">Duration</label>
                                 <div class="form-control-wrap">
                                   <select name="duration" id="strategySelect" class="form-control">
                                    <option value="" disabled selected hidden>Duration </option>
                                    <option value="3 years">3 years</option>
                                    <option value="6 years">6 years</option>
                                    <option value="10 year">10 year</option>
                                    <option value="15 years">15 years</option>
                                </select>
                                 </div>
                                 @error('duration')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>
             
  
                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  style="text-align:center; background-color:rgb(48, 48, 102)" class="d-block form-control btn btn-primary ">
                                Submit Request</button>
                              </div>
                             </div>
                            </div>
            
                           </form>
            
                          </div>
                         </div>
                        </div>
                       </div><!-- .card-preview -->
                      </div><!-- .nk-block -->
                     </div><!-- .nk-block -->
                    </div>
                   </div>
                  </div>
                 </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>
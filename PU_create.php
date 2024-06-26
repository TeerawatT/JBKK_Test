<!DOCTYPE html>
<html lang="en">
<?php include 'include/side-navbar.php'; ?>

<body>
    <div class="content" id="content">
        <section class="nav_top">
            <div class="row ms-0 me-0">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="col-10">
                            <a class="navbar-brand fs-6">help</a>
                        </div>
                        <div class="col-2 d-flex justify-content-end align-items-center">
                            <a class="navbar-brand">
                                <img src="assets\IMG\united-states.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                            </a>
                            <a class="navbar-brand ms-1 me-4 mt-1" href="#">
                                <i class="bi bi-bell"></i>
                            </a>
                            <a class="navbar-brand d-flex align-items-center fs-6 fw-medium mt-1 ">
                                <i class="bi bi-person-circle"></i>
                                SuperAdmin
                            </a>
                            <a class="navbar-brand ms-1 mt-1" href="#">
                                <i class="bi bi-power"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section class="nav_top_2">
            <div class="row ms-0 me-0">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="col-7">
                            <a class="navbar-brand fs-5 ms-4 fw-semibold">Purchase (PU)</a>
                        </div>
                        <div class="col-5 d-flex justify-content-end align-items-center">
                            <button type="button" class="button1">
                                Day Book
                            </button>
                            <button type="button" class="button2" data-bs-toggle="modal" data-bs-target="#poModal">
                                PO
                            </button>
                            <button type="button" class="button3">
                                Memo Pending
                            </button>
                            <a class="navbar-brand mt-1 ">
                                <i class="bi bi-printer "></i>
                            </a>
                            <a class="navbar-brand ">
                                <img src="assets\IMG\uiw_file-excel.png" alt="Logo" width="28" height="28">
                            </a>
                            <a class="navbar-brand " href="#" data-bs-toggle="modal" data-bs-target="#qrModal">
                                <i data-lucide="scan-line"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section class="content_top">
            <div class="container-fluid">
                <div class="trans_date">
                    <p class="mb-0 text-end"><span>Transaction Date : 29/01/2024 By : Super Admin</span> <span class="ms-4"> Last Update :29/01/2024 By : Super Admin</span></p>
                </div>
                <div class="wrap">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <h6 class="mb-0">Purchase No. :</h6>
                            <h3>PU2024010022</h3>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                            <div class="row">
                                <div class="col-6">
                                    <div class="textOnInput">
                                        <label for="datepicker">
                                            <span>Due Date :<span class="text-danger">*</span></span></label>
                                        <input id="datepicker" placeholder="DD/MM/YY" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="textOnInput">
                                        <label for="datepicker2">
                                            <span>Due Date :<span class="text-danger">*</span></span></label>
                                        <input id="datepicker2" placeholder="DD/MM/YY" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="textOnInput">
                                <label for="inputAcc">
                                    <span>Account :<span class="text-danger">*</span></span></label>
                                <input type="text" class="form-select" id="inputAcc">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="textOnInput">
                                        <label for="inputRef1">
                                            <span>Ref 1 :</span></label>
                                        <input type="text" class="form-control" id="inputRef1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="textOnInput">
                                        <label for="inputRef2">
                                            <span>Ref 2 :</span></span></label>
                                        <input type="text" class="form-control" id="inputRef2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-5">
                                    <div class="textOnInput">
                                        <label for="inputCurr">
                                            <span>Currency :<span class="text-danger">*</span></span></label>
                                        <div class="custom-select-container" id="inputCurr">
                                            <div class="custom-select-selected" data-icon="icon-thb">
                                                <svg id="icon-thb" width="24" height="18" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.0429688 0.0449219H26.043V18.0449H0.0429688V0.0449219Z" fill="#ED1C24" />
                                                    <path d="M0.0429688 3.04492H26.043V15.0449H0.0429688V3.04492Z" fill="white" />
                                                    <path d="M0.0429688 6.04492H26.043V12.045H0.0429688V6.04492Z" fill="#241D4F" />
                                                </svg>
                                                <span>THB - THAILAND</span>
                                            </div>
                                            <div class="custom-select-dropdown">
                                                <div class="custom-option" data-value="THB - THAILAND" data-icon="icon-thb">
                                                    <svg id="icon-thb" width="24" height="18" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.0429688 0.0449219H26.043V18.0449H0.0429688V0.0449219Z" fill="#ED1C24" />
                                                        <path d="M0.0429688 3.04492H26.043V15.0449H0.0429688V3.04492Z" fill="white" />
                                                        <path d="M0.0429688 6.04492H26.043V12.045H0.0429688V6.04492Z" fill="#241D4F" />
                                                    </svg>
                                                    <span>THB - THAILAND</span>
                                                </div>
                                                <div class="custom-option" data-value="USD - USA" data-icon="icon-usd">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.2 38.4" style="width: 24px; height: 24px; enable-background:new 0 0 55.2 38.4;" xml:space="preserve">
                                                        <style type="text/css">
                                                            .st0 {
                                                                fill: #B22234;
                                                            }

                                                            .st1 {
                                                                fill: #FFFFFF;
                                                            }

                                                            .st2 {
                                                                fill: #3C3B6E;
                                                            }
                                                        </style>
                                                        <g>
                                                            <path class="st0" d="M3.03,0h49.13c1.67,0,3.03,1.36,3.03,3.03v32.33c0,1.67-1.36,3.03-3.03,3.03H3.03C1.36,38.4,0,37.04,0,35.37 V3.03C0,1.36,1.36,0,3.03,0L3.03,0z" />
                                                            <path class="st1" d="M0.02,2.73h55.17c0.01,0.1,0.02,0.2,0.02,0.31v2.94H0V3.03C0,2.93,0.01,2.83,0.02,2.73L0.02,2.73z M55.2,8.67 v3.24H0V8.67H55.2L55.2,8.67z M55.2,14.61v3.24H0v-3.24H55.2L55.2,14.61z M55.2,20.55v3.24H0v-3.24H55.2L55.2,20.55z M55.2,26.49 v3.24H0v-3.24H55.2L55.2,26.49z M55.2,32.43v2.93c0,0.1-0.01,0.21-0.02,0.31H0.02C0.01,35.58,0,35.47,0,35.37v-2.93H55.2 L55.2,32.43z" />
                                                            <path class="st2" d="M20.8,0v20.68H0V3.03C0,1.36,1.36,0,3.03,0H20.8L20.8,0L20.8,0z" />
                                                            <polygon class="st1" points="1.23,2.86 1.92,5.01 0.1,3.68 2.36,3.68 0.53,5.01 1.23,2.86" />
                                                            <polygon class="st1" points="1.23,7.02 1.92,9.17 0.1,7.84 2.36,7.84 0.53,9.17 1.23,7.02" />
                                                            <polygon class="st1" points="1.23,11.18 1.92,13.33 0.1,12 2.36,12 0.53,13.33 1.23,11.18" />
                                                            <polygon class="st1" points="1.23,15.34 1.92,17.49 0.1,16.16 2.36,16.16 0.53,17.49 1.23,15.34" />
                                                            <polygon class="st1" points="3.67,0.78 4.37,2.93 2.54,1.6 4.81,1.6 2.97,2.93 3.67,0.78" />
                                                            <polygon class="st1" points="3.67,4.94 4.37,7.09 2.54,5.76 4.81,5.76 2.97,7.09 3.67,4.94" />
                                                            <polygon class="st1" points="3.67,9.1 4.37,11.25 2.54,9.92 4.81,9.92 2.97,11.25 3.67,9.1" />
                                                            <polygon class="st1" points="3.67,13.26 4.37,15.41 2.54,14.08 4.81,14.08 2.97,15.41 3.67,13.26" />
                                                            <polygon class="st1" points="3.67,17.42 4.37,19.57 2.54,18.24 4.81,18.24 2.97,19.57 3.67,17.42" />
                                                            <polygon class="st1" points="6.12,2.86 6.82,5.01 4.99,3.68 7.25,3.68 5.42,5.01 6.12,2.86" />
                                                            <polygon class="st1" points="6.12,7.02 6.82,9.17 4.99,7.84 7.25,7.84 5.42,9.17 6.12,7.02" />
                                                            <polygon class="st1" points="6.12,11.18 6.82,13.33 4.99,12 7.25,12 5.42,13.33 6.12,11.18" />
                                                            <polygon class="st1" points="6.12,15.34 6.82,17.49 4.99,16.16 7.25,16.16 5.42,17.49 6.12,15.34" />
                                                            <polygon class="st1" points="8.57,0.78 9.26,2.93 7.44,1.6 9.7,1.6 7.87,2.93 8.57,0.78" />
                                                            <polygon class="st1" points="8.57,4.94 9.26,7.09 7.44,5.76 9.7,5.76 7.87,7.09 8.57,4.94" />
                                                            <polygon class="st1" points="8.57,9.1 9.26,11.25 7.44,9.92 9.7,9.92 7.87,11.25 8.57,9.1" />
                                                            <polygon class="st1" points="8.57,13.26 9.26,15.41 7.44,14.08 9.7,14.08 7.87,15.41 8.57,13.26" />
                                                            <polygon class="st1" points="8.57,17.42 9.26,19.57 7.44,18.24 9.7,18.24 7.87,19.57 8.57,17.42" />
                                                            <polygon class="st1" points="11.01,2.86 11.71,5.01 9.88,3.68 12.14,3.68 10.31,5.01 11.01,2.86" />
                                                            <polygon class="st1" points="11.01,7.02 11.71,9.17 9.88,7.84 12.14,7.84 10.31,9.17 11.01,7.02" />
                                                            <polygon class="st1" points="11.01,11.18 11.71,13.33 9.88,12 12.14,12 10.31,13.33 11.01,11.18" />
                                                            <polygon class="st1" points="11.01,15.34 11.71,17.49 9.88,16.16 12.14,16.16 10.31,17.49 11.01,15.34" />
                                                            <polygon class="st1" points="13.46,0.78 14.16,2.93 12.33,1.6 14.59,1.6 12.76,2.93 13.46,0.78" />
                                                            <polygon class="st1" points="13.46,4.94 14.16,7.09 12.33,5.76 14.59,5.76 12.76,7.09 13.46,4.94" />
                                                            <polygon class="st1" points="13.46,9.1 14.16,11.25 12.33,9.92 14.59,9.92 12.76,11.25 13.46,9.1" />
                                                            <polygon class="st1" points="13.46,13.26 14.16,15.41 12.33,14.08 14.59,14.08 12.76,15.41 13.46,13.26" />
                                                            <polygon class="st1" points="13.46,17.42 14.16,19.57 12.33,18.24 14.59,18.24 12.76,19.57 13.46,17.42" />
                                                            <polygon class="st1" points="15.9,2.86 16.6,5.01 14.77,3.68 17.03,3.68 15.21,5.01 15.9,2.86" />
                                                            <polygon class="st1" points="15.9,7.02 16.6,9.17 14.77,7.84 17.03,7.84 15.21,9.17 15.9,7.02" />
                                                            <polygon class="st1" points="15.9,11.18 16.6,13.33 14.77,12 17.03,12 15.21,13.33 15.9,11.18" />
                                                            <polygon class="st1" points="15.9,15.34 16.6,17.49 14.77,16.16 17.03,16.16 15.21,17.49 15.9,15.34" />
                                                            <polygon class="st1" points="18.35,0.78 19.05,2.93 17.22,1.6 19.48,1.6 17.65,2.93 18.35,0.78" />
                                                            <polygon class="st1" points="18.35,4.94 19.05,7.09 17.22,5.76 19.48,5.76 17.65,7.09 18.35,4.94" />
                                                            <polygon class="st1" points="18.35,9.1 19.05,11.25 17.22,9.92 19.48,9.92 17.65,11.25 18.35,9.1" />
                                                            <polygon class="st1" points="18.35,13.26 19.05,15.41 17.22,14.08 19.48,14.08 17.65,15.41 18.35,13.26" />
                                                            <polygon class="st1" points="18.35,17.42 19.05,19.57 17.22,18.24 19.48,18.24 17.65,19.57 18.35,17.42" />
                                                        </g>
                                                    </svg>

                                                    <span>USD - USA</span>
                                                </div>
                                                <div class="custom-option" data-value="JPY - JAPAN" data-icon="icon-jpy">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.7 38.9" style="width: 24px; height: 24px; enable-background:new 0 0 55.7 38.9;" xml:space="preserve">
                                                        <style type="text/css">
                                                            .st3 {
                                                                fill: #FFFFFF;
                                                                stroke: #bfbfbf;
                                                                stroke-width: 2;
                                                                stroke-miterlimit: 2.6131;
                                                            }

                                                            .st4 {
                                                                fill: #BC002D;
                                                            }
                                                        </style>
                                                        <g>
                                                            <path class="st3" d="M3.28,0.25h49.13c1.67,0,3.03,1.36,3.03,3.03v32.33c0,1.67-1.36,3.03-3.03,3.03H3.28 c-1.67,0-3.03-1.37-3.03-3.03V3.28C0.25,1.61,1.61,0.25,3.28,0.25L3.28,0.25z" />
                                                            <path class="st4" d="M39.37,19.45c0-6.36-5.16-11.52-11.52-11.52c-6.36,0-11.52,5.16-11.52,11.52c0,6.36,5.16,11.52,11.52,11.52 C34.21,30.97,39.37,25.81,39.37,19.45L39.37,19.45z" />
                                                        </g>
                                                    </svg>
                                                    <span>JPY - JAPAN</span>
                                                </div>
                                                <div class="custom-option" data-value="CNY - CHINA" data-icon="icon-cny">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.2 38.4" style="width: 24px; height: 24px; enable-background:new 0 0 55.2 38.4;" xml:space="preserve">
                                                        <style type="text/css">
                                                            .st5 {
                                                                fill: #DE2910;
                                                            }

                                                            .st6 {
                                                                fill: #FFDE00;
                                                            }
                                                        </style>
                                                        <g>
                                                            <path class="st5" d="M3.01,0h49.17c1.66,0.01,3.01,1.37,3.01,3.03v32.33c0,1.66-1.35,3.02-3.01,3.03L3,38.4 c-1.65-0.02-3-1.38-3-3.03V3.03C0,1.37,1.35,0.01,3.01,0L3.01,0z" />
                                                            <polygon class="st6" points="8.4,3.84 11.79,14.26 2.92,7.82 13.88,7.82 5.01,14.26 8.4,3.84" />
                                                            <polygon class="st6" points="18.75,2.07 18.43,5.71 16.55,2.58 19.91,4.01 16.35,4.83 18.75,2.07" />
                                                            <polygon class="st6" points="23.22,6.34 21.51,9.57 20.99,5.96 23.54,8.58 19.94,7.95 23.22,6.34" />
                                                            <polygon class="st6" points="23.64,12.78 20.77,15.03 21.77,11.52 23.02,14.95 19.99,12.91 23.64,12.78" />
                                                            <polygon class="st6" points="18.68,15.48 18.51,19.13 16.5,16.08 19.92,17.37 16.4,18.34 18.68,15.48" />
                                                        </g>
                                                    </svg>
                                                    <span>CNY - CHINA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="textOnInput_dis">
                                        <label for="inputExcha">
                                            <span>Exchange Rate :<span class="text-danger">*</span></span></label>
                                        <input type="text" class="form-control" id="inputExcha" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hidden SVGs -->
            <div style="display:none;">
                <svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.0429688 0.0449219H26.043V18.0449H0.0429688V0.0449219Z" fill="#ED1C24" />
                    <path d="M0.0429688 3.04492H26.043V15.0449H0.0429688V3.04492Z" fill="white" />
                    <path d="M0.0429688 6.04492H26.043V12.045H0.0429688V6.04492Z" fill="#241D4F" />
                </svg>
                <svg id="icon-usd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

                    <rect x="5" y="5" width="14" height="14" stroke="black" stroke-width="2" fill="none" />
                </svg>
                <svg id="icon-jpy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

                    <line x1="5" y1="5" x2="19" y2="19" stroke="black" stroke-width="2" />
                    <line x1="5" y1="19" x2="19" y2="5" stroke="black" stroke-width="2" />
                </svg>
                <svg id="icon-cny" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

                    <path d="M5 5 L19 19 M19 5 L5 19" stroke="black" stroke-width="2" />
                </svg>
            </div>
        </section>

        <section class="Content_main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 pe-0">
                        <section class="table_part">
                            <div class="wrap">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="head_table mb-4 fw-semibold">Item</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="border_table table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>location</th>
                                                        <th>Stone</th>
                                                        <th>Shape</th>
                                                        <th>Size</th>
                                                        <th>Color</th>
                                                        <th>Cutting</th>
                                                        <th>Quality</th>
                                                        <th>Clarity</th>
                                                        <th>Cer Type</th>
                                                        <th>Cer No.</th>
                                                        <th>Lot</th>
                                                        <th class="text-end">Pcs</th>
                                                        <th>Weight</th>
                                                        <th class="text-end">Price</th>
                                                        <th class="text-start">Unit</th>
                                                        <th class="text-end">Amount</th>
                                                        <th>Discount (%)</th>
                                                        <th>Discount Amt</th>
                                                        <th>Total Amount</th>
                                                        <th>Labour</th>
                                                        <th>Price</th>
                                                        <th>Unit</th>
                                                        <th>Due Date</th>
                                                        <th>Ref No.</th>
                                                        <th>Remark</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fs-6">1</td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.0000"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select" value="Recutting"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control date_icon" placeholder="DD/MM/YY"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control descrip_text" placeholder="Description..."></td>
                                                        <td><img src="assets\IMG\Vector.png"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-6">2</td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.0000"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select" value="Recutting"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control date_icon" placeholder="DD/MM/YY"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control descrip_text" placeholder="Description..."></td>
                                                        <td><img src="assets\IMG\Vector.png"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-6">3</td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.0000"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select" value="Recutting"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control date_icon" placeholder="DD/MM/YY"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control descrip_text" placeholder="Description..."></td>
                                                        <td><img src="assets\IMG\Vector.png"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-6">4</td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.0000"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select" value="Recutting"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control date_icon" placeholder="DD/MM/YY"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control descrip_text" placeholder="Description..."></td>
                                                        <td><img src="assets\IMG\Vector.png"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-6">5</td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.0000"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select" value="Recutting"></td>
                                                        <td><input type="text" class="form-control text-end" value="0.00"></td>
                                                        <td><input type="text" class="form-select"></td>
                                                        <td><input type="text" class="form-control date_icon" placeholder="DD/MM/YY"></td>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td><input type="text" class="form-control descrip_text" placeholder="Description..."></td>
                                                        <td><img src="assets\IMG\Vector.png"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"><input type="text" class="form-control" disabled></td>
                                                        <td class="border-top"><input type="text" class="form-control text-end" value="0.0000" disabled></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top border-start-0"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"><input type="text" class="form-control text-end" value="0.00" disabled></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                        <td class="border-top"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="mt-2 ms-1 text-primary-emphasis fw-semibold">+ Add Row</p>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="textareaOnInput">
                                            <label for="exampleFormControlTextarea1">
                                                <span>Remark</span></label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="The remark will be show on document"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-4 ps-0">
                        <section class="summary_part">
                            <div class="wrap">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="text_sum mb-4 fw-semibold">Summary Value</h5>
                                    </div>
                                    <div class="container">
                                        <div class="col-12 d-flex justify-content-between ps-4">
                                            <p>Product Total Amount</p>
                                            <p>0.00 THB</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between ps-4">
                                            <p>Discount<input class="discount_per ms-2" type="text" id="" name="" step=""><span class="ms-1">%</span></p>
                                            <p><input class="discount ms-2" type="text" id="" name="" step="" placeholder="0.00"><span class="ms-1">THB</span></p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between ps-4">
                                            <p>Product after Discount</p>
                                            <p>0.00 THB</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between ps-4">
                                            <div class="d-flex">
                                                <p><input type="checkbox" id="myCheck" onclick="myFunction()"><span class="ms-1">VAT</span></p>
                                                <p id="text_VAT" style="display:none"><input class="VAT ms-2" type="text" id="" name="" step=""><span class="ms-1">%</span></p>
                                            </div>
                                            <p>0.00 THB</p>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between ps-4">
                                            <p>Other Charge</p>
                                            <p><input class="other_cha ms-2" type="text" id="" name="" step="" placeholder="0.00"><span class="ms-1">THB</span></p>
                                        </div>
                                        <div class="col-12 ps-4 mb-1">
                                            <div class="bg_total d-flex justify-content-between align-items-center">
                                                <h4 class="fw-semibold">Grand Total</h4>
                                                <h2 class="fw-bold">0.00 THB</h2>
                                            </div>
                                        </div>
                                        <div class="col-12 ps-4">
                                            <div class="textareaOnInput">
                                                <label for="exampleFormControlTextarea2">
                                                    <span>Note</span></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="The note will be show on document"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 ps-0 pe-0">
                        <section class="save_button">
                            <div class="wrap">
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <button type="button" class="button4 fw-semibold">
                                        Cancel
                                    </button>
                                    <button type="button" class="button5 fw-semibold" data-bs-toggle="modal" data-bs-target="#saveModal">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <section class="modal_save">
            <div class="modal" id="saveModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="button_close d-flex justify-content-end align-items-center">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-header d-flex justify-content-center align-items-center">
                            <img src="assets\IMG\img_save.png">
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <h4>Would you like to save?</h4>
                        </div>
                        <div class="modal-footer d-flex justify-content-center align-items-center pt-0">
                            <button type="button" class="button1_save fw-bold">
                                No
                            </button>
                            <button type="button" class="button2_save fw-bold" data-bs-toggle="modal" data-bs-target="#saveModal_success">
                                Yes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="saveModal_success" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="button_close d-flex justify-content-end align-items-center">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-header d-flex justify-content-center align-items-center flex-column pt-5">
                            <img src="assets\IMG\simple-line-icons_check.png">
                            <h4 class="mt-4 fw-bold">Successfully!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="modal_qr">
            <div class="modal" id="qrModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="button_close d-flex justify-content-end align-items-center">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-header d-flex justify-content-center align-items-center flex-column">
                            <h5 class="mb-0 fw-bold">Scan QR Code</h5>
                            <p class="mb-0">Hold your device over a QR Code to scan it </p>
                            <p class="mb-0">Tap the pop-up notification</p>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <img src="assets\IMG\qr_code.png">
                        </div>
                        <div class="modal-footer d-flex justify-content-center align-items-center pt-0">
                            <button type="button" class="button_qr fw-bold" data-bs-dismiss="modal">
                                SCAN
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="modal_PO">
            <div class="modal" id="poModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-color d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-semibold">Purchase Order</h5>
                            <button id='close' data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="wrap">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="textOnInput">
                                                        <label for="inputAcc2">
                                                            <span>Account :</span></label>
                                                        <input type="text" class="form-select" id="inputAcc2">
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex justify-content-end align-items-center pe-0">
                                                    <p class="mb-0 me-2">Row per page</p>
                                                    <div class="Row_per">
                                                        <input type="text" class="form-select" id="" placeholder="20">
                                                    </div>
                                                </div>
                                                <div class="col-1 d-flex justify-content-around align-items-center">
                                                    <img src="assets\IMG\mi_print.png" alt="Logo" width="28" height="28">
                                                    <img src="assets\IMG\uiw_file-excel-gray.png" alt="Logo" width="25" height="25">
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <section class="PO_table">
                                                        <div class="border_table table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="box"><input type="checkbox"></th>
                                                                        <th>#</th>
                                                                        <th>TranDate <img src="assets\IMG\bx_sort.png"></th>
                                                                        <th>Doc Date <img src="assets\IMG\bx_sort.png"></th>
                                                                        <th>Due Date <img src="assets\IMG\bx_sort.png"></th>
                                                                        <th>PU No.</th>
                                                                        <th>Account <img src="assets\IMG\icon_filter.png"></th>
                                                                        <th>Ref 1</th>
                                                                        <th>Ref 2</th>
                                                                        <th>Pcs</th>
                                                                        <th>Weight</th>
                                                                        <th>Amount</th>
                                                                        <th>Currency <img src="assets\IMG\icon_filter.png"></th>
                                                                        <th>Remark</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php

                                                                    $mockData = [
                                                                        ["25/01/2024", "25/01/2024", "25/01/2024", "PO2024010022", "Lopster", "", "", 1, 0.5000, 14350.00, "THB", ""],
                                                                        ["25/01/2024", "25/01/2024", "25/01/2024", "PO2024010228", "Lopster", "", "", 1, 1.5000, 21350.00, "THB", ""],
                                                                        ["22/01/2024", "06/01/2024", "06/01/2024", "PO2024010106", "Lopster", "", "", 1, 0.5000, 9050.00, "THB", ""],
                                                                        ["25/01/2024", "25/01/2024", "25/01/2024", "PO2024010302", "Lopster", "", "", 1, 0.3000, 4060.00, "THB", ""],
                                                                        ["25/01/2024", "25/01/2024", "25/01/2024", "PO2024010851", "Lopster", "", "", 1, 0.4000, 7850.00, "THB", ""],
                                                                    ];


                                                                    foreach ($mockData as $index => $data) {
                                                                        echo "<tr>";
                                                                        echo "<td><input type='checkbox'></td>";
                                                                        echo "<td class='fs-6'>" . ($index + 1) . "</td>";
                                                                        echo "<td>" . $data[0] . "</td>";
                                                                        echo "<td>" . $data[1] . "</td>";
                                                                        echo "<td>" . $data[2] . "</td>";
                                                                        echo "<td>" . $data[3] . "</td>";
                                                                        echo "<td>" . $data[4] . "</td>";
                                                                        echo "<td>" . $data[5] . "</td>";
                                                                        echo "<td>" . $data[6] . "</td>";
                                                                        echo "<td>" . $data[7] . "</td>";
                                                                        echo "<td>" . number_format($data[8], 4, '.') . "</td>";
                                                                        echo "<td>" . number_format($data[9], 2, '.', ',') . "</td>";
                                                                        echo "<td>" . $data[10] . "</td>";
                                                                        echo "<td><input class='descrip_text' type='text' value='' placeholder='Description...'" . $data[11] . "'></td>";
                                                                        echo "</tr>";
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-between align-items-center pt-0">
                            <button type="button" class="button1_po fw-bold" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="button2_po fw-bold">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>

    <script>
        lucide.createIcons();
    </script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>

    <script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>

<!-- input VAT -->
    <script>
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text_VAT");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>

<!-- Currency dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectContainer = document.getElementById('inputCurr');
            const selected = selectContainer.querySelector('.custom-select-selected');
            const dropdown = selectContainer.querySelector('.custom-select-dropdown');

            selected.addEventListener('click', function() {
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                selected.classList.toggle('active');
            });

            const options = selectContainer.querySelectorAll('.custom-option');
            options.forEach(option => {
                option.addEventListener('click', function() {
                    const icon = option.querySelector('svg').cloneNode(true);
                    const text = option.querySelector('span').textContent;

                    selected.innerHTML = '';
                    selected.appendChild(icon);
                    selected.appendChild(document.createTextNode(text));

                    dropdown.style.display = 'none';
                    selected.classList.remove('active');
                });
            });

            document.addEventListener('click', function(e) {
                if (!selectContainer.contains(e.target)) {
                    dropdown.style.display = 'none';
                    selected.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>
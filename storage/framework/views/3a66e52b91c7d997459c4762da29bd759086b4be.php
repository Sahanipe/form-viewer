<!DOCTYPE html>

<head>
    <style>
        table,
        th,
        td {
            border: #212121 solid 1px;
            border-collapse: collapse;
            margin-right: 0px;
            margin-left:   0px;
            margin-bottom: 0px;
            font-size: 19pt;
            padding: 5px;
            font-family: 'Segoe UI Light';
        }

        font {
            margin-left: 0px;
            margin-right: 0px;
            /* font-size: 16px; */
            font-family: "Segoe UI Light";
            margin-bottom: 1px;
        }

        .bg-color{
            background: #D3D3D3;
        }
        .a {
            height: 6px;
            line-height: 12px;
            border-bottom: #000000;
            border-top: #000000;
            background: #dedcdc;
            position: relative;
        }

        .a>span{
            float: left;
            transform: rotate(-90deg);
        }

        body{
            margin-left: 1.95cm;
           
        }
    </style>

</head>

<body >
    <section class="form-body">
    <?php echo e($foo); ?>

        <!-- <header class="form-header"> -->
            <div style="margin-left:2.25in; text-indent:.25in; ">
                <span style="position:absolute;left:-1px;
                     margin-left: 70px; margin-top: 0;" >
                    <img width="140" height="140" src="<?php echo e(asset('/form-images/govlogo.jpg')); ?>" alt="gov_logo"></span>
                <span style="position: absolute; margin-left:534px; margin-top:30px; width:124px; ">
                    <img width="180" height="auto" src="<?php echo e(asset('/form-images/eroc.png')); ?>" alt="Logo EROC"></span>
                </div>

<br>
<br>
            <div style="margin-left:2.25in; text-indent:.25in; margin: 0; "><b>
                    <span style="font-size:22pt;font-family: Segoe UI Light;  ">
                        <span style="margin-left:10em; color: #191919">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>FORM 1<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </span></b>
                <span style="font-family: Segoe UI Light;">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span>
                </span>
                <!-- <span >
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                </span> -->
                <span style="font-size:11.0pt; font-family:Segoe UI Light;">(Section 4(1))</span>
                <span style="font-size:13.0pt;font-family:Segoe UI Light"></span>
            </div>

            <p align="center" style="text-align:center;margin: 5;">
                <span style="font-size:12.0pt; font-family:Segoe UI Light;">
                    <span>&nbsp;&nbsp;&nbsp; </span>Application for</span>
            </p>

            <p align="center" style="text-align:center; margin: 5;">
                <b><span style="font-size:20pt;font-family:Segoe UI Light;color:  #191919; ">
                        <span>&nbsp;&nbsp;</span>REGISTRATION OF A COMPANY</span>
                </b>
            </p>

            <p align="center" style="text-align:center; margin: 0 !important;">
                <span style="font-size:12.0pt; font-family:Segoe UI Light,sans-serif;">
                    <span>&nbsp;&nbsp; </span>Section 4(1) of Companies Act No.
                    7 of 2007 (“the Act”)<p></p>
                </span>
            </p>


            <!-- <table style="    margin-left: 0; margin-right: 0;" width="100%">
                                <tbody>
                                        <tr>
                                                <td rowspan="2" width="10%"     > <img src="images/govlogo.jpg" width="97px;" height="97px" alt="gov_logo" /></td>
                                                <td width="60%"     ><font style="font-size:111pt; text-indent: 0.25in;">
                                                               <center><b>FORM 1</b></center> 
                                                        </font></td>
                                                <td width="20%"  style="    font-size: 9.0pt; text-indent: 0.25in;"> (Section 4(1))</td>
                                                <td rowspan="2" width="10%"     >  <img src="images/eroc.png" width="124px;" height="75px;" alt="eroc" /></td>
                                        </tr>
                                        <tr     >
                                                <td style=" border: 0;">
                                                        <img src="images/govlogo.jpg" width="97px;" height="97px" alt="gov_logo" />
                                                </td>
                                                <td      width="60%">
                                                        <center>
                                                                <font style="font-size:111pt; text-indent: 0.25in;">
                                                                        <b>FORM 1</b>
                                                                </font>
                                                                <br>
                                                                <font style="font-size: 18pt;">Application for</font>
                                                                <br>
                                                                <font style="font-size: 11pt;">
                                                                        <b>REGISTRATION OF A COMPANY</b>
                                                                </font>
                                                                <br />
                                                                <font style="font-size: 18pt;">Section 4(1) of
                                                                        Companies Act No.7 of 2007 ("the Act")</font>
                                                                <br />
                                                        </center>
                                                </td>
                                                <td style=" border: 0;">
                                                        <img src="images/eroc.png" width="124px;" height="75px;" alt="eroc" />
                                                </td>
                                        </tr>
                                </tbody>
                        </table> -->

            <table      width="100%" >
                <tbody>
                    <tr height="50">
                        <td width="28%" style="    font-size: 14pt;"> Company Number <?php echo e($foo); ?></td>
                        <td width="7%" >&nbsp;</td>
                        <td width="7%" >&nbsp;</td>
                        <td width="58%">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <table      width="100%" height="50">
                <tbody>
                    <tr>
                        <td width="28%" style="    font-size: 14pt;">Type of the company </td>
                        <td width="72%"></td>
                    </tr>
                </tbody>
            </table>
            <br>


            <table style="--primary-text-color: #212121; " width="100%">
                <tbody>
                    <tr>
                        <td width="26%" height="1.8cm" class="bg-color" style="font-size: 15pt; ">Name <br>Approval Numuber </td>
                        <td width="74%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="26%" height="5cm" class="bg-color" style="font-size: 15pt; "><br>Name of Proposed<br> Company</td>
                        <td width="74%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="26%" height="3cm" class="bg-color" style="font-size: 15pt; ">Registered Address</br>
                            <span style="font-size: 12pt;"><I>(Physical Address in Sri Lnaka and must not be a PO Box
                                address)<br><br></I></span>
                        </td>
                        <td width="74%" height="80">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <br>


            <table style="    font-size: 11pt;" width="100%">
                <tbody>
                    <tr>
                        <td style="    color:#000000">
                            <b><u>DECLARATION UNDER SECTION 4(1)(a) OF THE ACT</u></b>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 16pt; ">I/We declare that to the best
                            of my/our knowledge the name of this proposed
                            company is not identical or simillar to that of any existing
                            company</td>
                    </tr>
                </tbody>
            </table>

            <table style="    font-size: 11pt;" width="100%">
                <tbody>
                    <tr>
                        <td style="    color:  #212121;">
                            <b>
                                <u>ARTICLES OF ASSOCIATION</u>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td style="    font-size: 17pt; padding: 0;">
                            <ul>
                                <li>The Articles of Association of the proposed Company
                                    shall
                                    be as set out in the first schedule to the Act.</li>
                                <li>The articles of Association of the proposed Company
                                    shall
                                    be as set out in the Annexure "A" signed by
                                    each
                                    of us</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>


            <table style="border-color: #FFFFFF; border-top-color: #000000; font-size: 11pt; " width="100%">
                <tbody>
                    <tr>
                        <td style="color:  #212121;">
                            <b>
                                <u>INITIAL DIRECTORS</u>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td style="    font-size: 14pt; ">The following persons are the
                            initial directors of the proposed company and
                            signify their consent by signing below and certify that each
                            one
                            of them is not disqualified from being appointed or holding
                            office
                            as a directory of a company</td>
                    </tr>
                </tbody>
            </table>


            <table width="100%">
                <tbody>
                    <tr style="" height="0.5cm">
                        <td width="3.3%" rowspan="2" style="     "> </td>
                        <td width="21.4%" rowspan="2" style="font-size: 16pt; "class="bg-color">Full Name </td>
                        <td width="39.3%" rowspan="2"> </td>
                        <td width="36.1%" colspan="2" style="font-size: 15pt; "class="bg-color">
                            <center>e Mail Address</center>
                        </td>
                    <tr style="    ">
                        <td colspan="2" height="40"></td>
                    </tr>
             
                    <tr  height="3cm">
                        <td width="3.3%" style="    "> 1 </td>
                        <td width="21.4%" style="font-size: 16pt; "class="bg-color">NIC No</td>
                        <td width="39.3%"> </td>
                        <!-- <td width="5%" style="border: 1; transform: rotate(270deg) translate(-5%, -20%); position: relative; vertical-align:middle; transform-origin:0 0;" rowspan="2"> Signature</td> -->
                        <td width="5%" class="a" rowspan="3" style="font-size: 15pt;">
                            <span>Signature</span></td>
                        <td width="36.1%" style="    "></td>

                    </tr>
                    <tr height="3cm">
                        <td width="3.3%" style="     "> </td>
                        <td width="21.4%" style="font-size: 16pt; "class="bg-color">Passport NO & Country </td>
                        <td width="39.3%"> </td>
                        <!-- <td width="5%" style="border: 1; transform: rotate(270deg) translate(-5%, -20%); position: relative; vertical-align:middle; transform-origin:0 0;" rowspan="2"> Signature</td> -->
                        <!-- <td width="5%"  rowspan="3" style="font-size: 19pt;"></td> -->
                        <td width="36.1%" style="         "></td>
                    </tr>
                    <tr height="3cm">
                        <td width="3.3%" style="    "> </td>
                        <td width="21.4%" height="40" style="font-size: 16pt; "class="bg-color"> Residential Address</td>
                        <td width="39.3%" height="30"> </td>
                        <!-- <td width="5%" height="30" style="    "></td> -->
                        <td width="36.1%" height="30" style="    "> </td>
                    </tr>
                </tbody>
            </table>
            <font style="font-size:25px; padding: 0;">+</font>
            <br>
            
            <font style="font-size: 17pt;"><b>Presented by</b></font>
           
            <table width="100%">
                <tbody>
                    <tr height="60px">
                        <td width="25.5%" style="font-size: 16pt;"class="bg-color">Full Name </td>
                        <td width="74.6%">&nbsp;</td>
                    </tr>
                    <tr height="10px">
                        <td width="25.5%" style="font-size: 16pt; "class="bg-color">e Mail Address</td>
                        <td width="74.6%">&nbsp;</td>
                    </tr>
                    <tr height="10px">
                        <td width="25.5%" style="font-size: 16pt; "class="bg-color">Telephone No</td>
                        <td width="74.6%">&nbsp;</td>
                    </tr>
                    <tr height="10px">
                        <td width="25.5%" style="font-size: 16pt;"class="bg-color">Mobile No</td>
                        <td width="74.6%">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <p style="page-break-before: always"></p>
            

            

            <table style="border-color: #FFFFFF; font-size: 11pt;" width="100%" height="20">
                <tbody>
                    <tr>
                        <td style="color:  #212121;;">
                            <b>
                                <u>INITIAL SHARE HOLDERS</u>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 16pt;">The following persons are the initial
                            shareholders of the proposed company</td>
                    </tr>
            </table>
            <br>
           


            <table style=" font-size: 11pt;" width="100%">
                <tbody>
                    <tr style="    " height="10">
                        <td width="4.4%" rowspan="2" style="    "> </td>
                        <td width="21.3%" rowspan="2" class="bg-color" style="font-size: 16pt; ">Full Name<br>/Company Name </td>
                        <td width="37.3%" colspan="2" rowspan="2"> </td>
                        <td width=8% height="10" style="font-size: 16pt; "class="bg-color" colspan="2">Number of<br> shares</td>
                        <td width=29.3% height="10"></td>
                    <tr style="      "class="bg-color" height="30">
                        <td colspan="3" height="50" width="21.3"></td>
                    </tr>
                    <tr      height="4cm">
                        <td width="4.4%" style="         "> 1 </td>
                        <td width="21.3%" height="50" class="bg-color" style="font-size: 16pt; ">NIC No/Passport & Country<span style="font-size:13pt;">(if a
                                foreigner)</span>/ Company No<span style="font-size:13pt;">(if a company)</span>
                        </td>
                        <td width="38%" colspan="2"> </td>
                        <td width="5%" rowspan="2" style="font-size: 14pt;  " class="a"> <span>Signature</span></td>
                        <td width="8%" rowspan="2" ></td>
                        <td width="43%" style="   "></td>
                    </tr>

                    <tr height="3.4cm">
                        <td width="4.4%" style="    "> </td>
                        <td width="21.3%" height="100" class="bg-color" style="font-size: 16pt; "> Residential  Address</td>
                        <td width="38%" colspan="2"> </td>
                        <td width="30%" style="  "> </td>
                    </tr>
                    <tr height="50" style="    ">
                        <td style="   font-size: 17pt;" class="bg-color">+</td>
                        <td style="     "></td>
                        <td width="10%" style="    "></td>
                        <td style="font-size: 15pt; "class="bg-color" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Number of Shares</td>
                        <td colspan="3" width="21.3"></td>
                    </tr>
                </tbody>
            </table>
            <br>


            <table style="font-size: 11pt;" width="100%">
                <tbody>
                    <tr style="    " height="10">
                        <td width="4.4%" rowspan="2" style="    "> </td>
                        <td width="21.3%" rowspan="2" class="bg-color" style="font-size: 16pt; ">Full Name Beneficiary </td>
                        <td width="37.3%" colspan="2" rowspan="2"> </td>
                        <td width=8% height="10" style="font-size: 16pt; "class="bg-color" colspan="2">Number of<br> shares</td>
                        <td width=29.3% height="10"></td>
                    <tr style="     "class="bg-color" height="30">
                        <td colspan="3" height="50" width="21.3"></td>
                    </tr>
                    <tr      height="4cm">
                        <td width="4.4%" style="         "> 1 </td>
                        <td width="21.3%" height="50" class="bg-color" style="font-size: 16pt; ">NIC No/Passport & Country<span style="font-size:12pt;">(if
                                Foreigner)</span>/ Company No<span style="font-size:12pt;">(if a company)</span>
                        </td>
                        <td width="38%" colspan="2"> </td>
                        <td width="5%" rowspan="2" style="font-size: 15pt;  " class="a"> <span>Signature</span></td>
                        <td width="8%" rowspan="2"></td>
                        <td width="43%" style="    "></td>
                    </tr>

                    <tr  height="3.4cm">
                        <td width="4.4%" style="    "> </td>
                        <td width="21.3%" height="90" class="bg-color" style="font-size: 16pt; "> Residential Address</td>
                        <td width="38%" colspan="2"> </td>
                        <td width="30%" style="     "> </td>
                    </tr>
                    <tr height="50" style="     ">
                        <td style="       font-size: 17px;;" class="bg-color">+</td>
                        <td style="    "></td>
                        <td width="10%" style=""></td>
                        <td style="font-size: 15pt; "class="bg-color" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Number of Shares</td>
                        <td colspan="3" width="21.3"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table style="border-color: #FFFFFF; font-size: 11pt;" width="100%" height="30">
                <tbody>

                    <tr>
                        <td style="    color:  #212121;">
                            <br>
                            <b><u>INITIAL SECRATARY/ SECRATARIES</u></b>
                        </td>
                    </tr>
                    <tr>
                        <td style="    font-size: 17pt">The following persons(s) shall be the initial
                            secratary/secrataries* of the
                            proposed company and he/she/they signify his/her/their consent
                            by
                            signing below:-</td>
                    </tr>
                </tbody>
            </table>

            <table style="--primary-text-color: #212121; font-size: 10pt;" width="100%">
                <tbody>
                    <tr height="60" > 
                        <td width="16.2%" class="bg-color" style="font-size: 16pt;">Full Name </td>
                        <td width="45.7%">&nbsp;</td>
                        <td rowspan="4" class="a" style="font-size: 15pt;"><span>Signature</span></td>
                        <td rowspan="4" width="33.2%"></td>
                    </tr>
                    <tr height="50" >
                        <td width="16.2%"  class="bg-color" style="font-size: 16pt;">Registration <br> No</td>
                        <td width="45.7%">&nbsp;</td>
                    </tr>
                    <tr height="30">
                        <td width="16.2%" class="bg-color" style="font-size: 16pt;">Email address</td>
                        <td width="45.7%">&nbsp;</td>
                    </tr>
                    <tr height="70">
                        <td width="16.2%"  class="bg-color" style="font-size: 16pt;">Permanent Address</td>
                        <td width="45.7%" height="80">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <!-- 
            <font style="font-size: 25px;">+</font> -->
            <br>
            

            <font style="font-size:17pt;">Signatures of initial shareholders:</font>

            <table width="100%" >
                <tbody>
                    <tr height="140">
                        <td width="16.2%" align="center" class="bg-color" style="font-size:16pt;">Full Name</td>
                        <td width="39.2%"></td>
                        <td width="5%" class="a"><span>Signature</span></td>
                        <td width="39.2%"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p style="page-break-before: always"></p>
        
            <table>
                <tbody>
                    <tr height="140">
                        <td width="16.2%" align="center" class="bg-color" style="font-size:16pt;">Full Name</td>
                        <td width="39.2%"></td>
                        <td width="5%" class="a"><span>Signature</span></td>
                        <td width="39.2%"></td>
                    </tr>
                </tbody>
            </table>
            

            <font style="font-size: 25px;">+</font>
           


            <table  width="100%" height="50.4">
                <tbody>
                    <tr>
                        <td height="30" align="right" style="    font-size: 16pt;">Date:</td>
                        <td width="8%"     ></td>
                        <td width="5%"></td>
                        <td width="5%"></td>
                        <td width="10%"     ></td>
                        <td width="5%"></td>
                        <td width="5%"></td>
                        <td width="10%"     ></td>
                        <td width="5%"></td>
                        <td width="5%"></td>
                        <td width="5%"></td>
                        <td width="5%"></td>
                        <td width="4%"     ></td>
                    </tr>
                    <tr>
                        <td width="30%" height="22"     ></td>
                        <td width="10%"     > </td>
                        <td colspan="2" class="bg-color" style="font-size:16pt;">
                            <center>Day</center>
                        </td>
                        <td width="10%"     ></td>
                        <td colspan="2" class="bg-color" style="font-size:16pt;">
                            <center>Month</center>
                        </td>
                        <td width="10%"     ></td>
                        <td colspan="4" class="bg-color" style="font-size:16pt;">
                            <center>Year</center>
                        </td>
                    </tr>
                </tbody>
            </table>

</body>

</html>
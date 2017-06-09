<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AgricServicomm | Register</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../css/sitewide.css" rel="stylesheet" type="text/css" >
         <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/
        ➥3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/
        ➥respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
	</head>

	<body>
    <div class="container">
    <!-- header //-->
    	<?php
		$imgPath = "../images/";
		require("../header.php");
		$countries = array
		(
			'AF' => 'Afghanistan',
			'AX' => 'Aland Islands',
			'AL' => 'Albania',
			'DZ' => 'Algeria',
			'AS' => 'American Samoa',
			'AD' => 'Andorra',
			'AO' => 'Angola',
			'AI' => 'Anguilla',
			'AQ' => 'Antarctica',
			'AG' => 'Antigua And Barbuda',
			'AR' => 'Argentina',
			'AM' => 'Armenia',
			'AW' => 'Aruba',
			'AU' => 'Australia',
			'AT' => 'Austria',
			'AZ' => 'Azerbaijan',
			'BS' => 'Bahamas',
			'BH' => 'Bahrain',
			'BD' => 'Bangladesh',
			'BB' => 'Barbados',
			'BY' => 'Belarus',
			'BE' => 'Belgium',
			'BZ' => 'Belize',
			'BJ' => 'Benin',
			'BM' => 'Bermuda',
			'BT' => 'Bhutan',
			'BO' => 'Bolivia',
			'BA' => 'Bosnia And Herzegovina',
			'BW' => 'Botswana',
			'BV' => 'Bouvet Island',
			'BR' => 'Brazil',
			'IO' => 'British Indian Ocean Territory',
			'BN' => 'Brunei Darussalam',
			'BG' => 'Bulgaria',
			'BF' => 'Burkina Faso',
			'BI' => 'Burundi',
			'KH' => 'Cambodia',
			'CM' => 'Cameroon',
			'CA' => 'Canada',
			'CV' => 'Cape Verde',
			'KY' => 'Cayman Islands',
			'CF' => 'Central African Republic',
			'TD' => 'Chad',
			'CL' => 'Chile',
			'CN' => 'China',
			'CX' => 'Christmas Island',
			'CC' => 'Cocos (Keeling) Islands',
			'CO' => 'Colombia',
			'KM' => 'Comoros',
			'CG' => 'Congo',
			'CD' => 'Congo, Democratic Republic',
			'CK' => 'Cook Islands',
			'CR' => 'Costa Rica',
			'CI' => 'Cote D\'Ivoire',
			'HR' => 'Croatia',
			'CU' => 'Cuba',
			'CY' => 'Cyprus',
			'CZ' => 'Czech Republic',
			'DK' => 'Denmark',
			'DJ' => 'Djibouti',
			'DM' => 'Dominica',
			'DO' => 'Dominican Republic',
			'EC' => 'Ecuador',
			'EG' => 'Egypt',
			'SV' => 'El Salvador',
			'GQ' => 'Equatorial Guinea',
			'ER' => 'Eritrea',
			'EE' => 'Estonia',
			'ET' => 'Ethiopia',
			'FK' => 'Falkland Islands (Malvinas)',
			'FO' => 'Faroe Islands',
			'FJ' => 'Fiji',
			'FI' => 'Finland',
			'FR' => 'France',
			'GF' => 'French Guiana',
			'PF' => 'French Polynesia',
			'TF' => 'French Southern Territories',
			'GA' => 'Gabon',
			'GM' => 'Gambia',
			'GE' => 'Georgia',
			'DE' => 'Germany',
			'GH' => 'Ghana',
			'GI' => 'Gibraltar',
			'GR' => 'Greece',
			'GL' => 'Greenland',
			'GD' => 'Grenada',
			'GP' => 'Guadeloupe',
			'GU' => 'Guam',
			'GT' => 'Guatemala',
			'GG' => 'Guernsey',
			'GN' => 'Guinea',
			'GW' => 'Guinea-Bissau',
			'GY' => 'Guyana',
			'HT' => 'Haiti',
			'HM' => 'Heard Island & Mcdonald Islands',
			'VA' => 'Holy See (Vatican City State)',
			'HN' => 'Honduras',
			'HK' => 'Hong Kong',
			'HU' => 'Hungary',
			'IS' => 'Iceland',
			'IN' => 'India',
			'ID' => 'Indonesia',
			'IR' => 'Iran, Islamic Republic Of',
			'IQ' => 'Iraq',
			'IE' => 'Ireland',
			'IM' => 'Isle Of Man',
			'IL' => 'Israel',
			'IT' => 'Italy',
			'JM' => 'Jamaica',
			'JP' => 'Japan',
			'JE' => 'Jersey',
			'JO' => 'Jordan',
			'KZ' => 'Kazakhstan',
			'KE' => 'Kenya',
			'KI' => 'Kiribati',
			'KR' => 'Korea',
			'KW' => 'Kuwait',
			'KG' => 'Kyrgyzstan',
			'LA' => 'Lao People\'s Democratic Republic',
			'LV' => 'Latvia',
			'LB' => 'Lebanon',
			'LS' => 'Lesotho',
			'LR' => 'Liberia',
			'LY' => 'Libyan Arab Jamahiriya',
			'LI' => 'Liechtenstein',
			'LT' => 'Lithuania',
			'LU' => 'Luxembourg',
			'MO' => 'Macao',
			'MK' => 'Macedonia',
			'MG' => 'Madagascar',
			'MW' => 'Malawi',
			'MY' => 'Malaysia',
			'MV' => 'Maldives',
			'ML' => 'Mali',
			'MT' => 'Malta',
			'MH' => 'Marshall Islands',
			'MQ' => 'Martinique',
			'MR' => 'Mauritania',
			'MU' => 'Mauritius',
			'YT' => 'Mayotte',
			'MX' => 'Mexico',
			'FM' => 'Micronesia, Federated States Of',
			'MD' => 'Moldova',
			'MC' => 'Monaco',
			'MN' => 'Mongolia',
			'ME' => 'Montenegro',
			'MS' => 'Montserrat',
			'MA' => 'Morocco',
			'MZ' => 'Mozambique',
			'MM' => 'Myanmar',
			'NA' => 'Namibia',
			'NR' => 'Nauru',
			'NP' => 'Nepal',
			'NL' => 'Netherlands',
			'AN' => 'Netherlands Antilles',
			'NC' => 'New Caledonia',
			'NZ' => 'New Zealand',
			'NI' => 'Nicaragua',
			'NE' => 'Niger',
			'NG' => 'Nigeria',
			'NU' => 'Niue',
			'NF' => 'Norfolk Island',
			'MP' => 'Northern Mariana Islands',
			'NO' => 'Norway',
			'OM' => 'Oman',
			'PK' => 'Pakistan',
			'PW' => 'Palau',
			'PS' => 'Palestinian Territory, Occupied',
			'PA' => 'Panama',
			'PG' => 'Papua New Guinea',
			'PY' => 'Paraguay',
			'PE' => 'Peru',
			'PH' => 'Philippines',
			'PN' => 'Pitcairn',
			'PL' => 'Poland',
			'PT' => 'Portugal',
			'PR' => 'Puerto Rico',
			'QA' => 'Qatar',
			'RE' => 'Reunion',
			'RO' => 'Romania',
			'RU' => 'Russian Federation',
			'RW' => 'Rwanda',
			'BL' => 'Saint Barthelemy',
			'SH' => 'Saint Helena',
			'KN' => 'Saint Kitts And Nevis',
			'LC' => 'Saint Lucia',
			'MF' => 'Saint Martin',
			'PM' => 'Saint Pierre And Miquelon',
			'VC' => 'Saint Vincent And Grenadines',
			'WS' => 'Samoa',
			'SM' => 'San Marino',
			'ST' => 'Sao Tome And Principe',
			'SA' => 'Saudi Arabia',
			'SN' => 'Senegal',
			'RS' => 'Serbia',
			'SC' => 'Seychelles',
			'SL' => 'Sierra Leone',
			'SG' => 'Singapore',
			'SK' => 'Slovakia',
			'SI' => 'Slovenia',
			'SB' => 'Solomon Islands',
			'SO' => 'Somalia',
			'ZA' => 'South Africa',
			'GS' => 'South Georgia And Sandwich Isl.',
			'ES' => 'Spain',
			'LK' => 'Sri Lanka',
			'SD' => 'Sudan',
			'SR' => 'Suriname',
			'SJ' => 'Svalbard And Jan Mayen',
			'SZ' => 'Swaziland',
			'SE' => 'Sweden',
			'CH' => 'Switzerland',
			'SY' => 'Syrian Arab Republic',
			'TW' => 'Taiwan',
			'TJ' => 'Tajikistan',
			'TZ' => 'Tanzania',
			'TH' => 'Thailand',
			'TL' => 'Timor-Leste',
			'TG' => 'Togo',
			'TK' => 'Tokelau',
			'TO' => 'Tonga',
			'TT' => 'Trinidad And Tobago',
			'TN' => 'Tunisia',
			'TR' => 'Turkey',
			'TM' => 'Turkmenistan',
			'TC' => 'Turks And Caicos Islands',
			'TV' => 'Tuvalu',
			'UG' => 'Uganda',
			'UA' => 'Ukraine',
			'AE' => 'United Arab Emirates',
			'GB' => 'United Kingdom',
			'US' => 'United States',
			'UM' => 'United States Outlying Islands',
			'UY' => 'Uruguay',
			'UZ' => 'Uzbekistan',
			'VU' => 'Vanuatu',
			'VE' => 'Venezuela',
			'VN' => 'Viet Nam',
			'VG' => 'Virgin Islands, British',
			'VI' => 'Virgin Islands, U.S.',
			'WF' => 'Wallis And Futuna',
			'EH' => 'Western Sahara',
			'YE' => 'Yemen',
			'ZM' => 'Zambia',
			'ZW' => 'Zimbabwe',
		);
	?>
    <!-- end of header //-->
    	
        
        <div class="row">
        	<div class="col-xs-1"><!-- blank column //--></div>           
            
        	<div class="col-xs-11 col-sm-11 col-md-8">
            	<!-- Second column for login //-->
                <div class="bottomspacer"> 
                	<h3>Sign Up</h3>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12">
                    	<?php require("registerUser.php"); ?>
                    </div>
                </div>
            	<div class="topspacer1">
                     <form class="form-horizontal"  action="register.php" method="post">
                            	<input type="hidden" class="form-control" id="username" name="username" value="<?php echo $_GET['username']; ?>" />  
                     	<div class="form-group">
                        	<label for="surname" class="col-xs-12 col-sm-2">
					Surname
					<span style="color:#ff0000"> *</span>
				</label>
				
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>  
                            </div>                                                          
                        </div>
                        <div class="form-group">	
                        	<label for="firstname" class="col-xs-12 col-sm-2">
					First Name
					<span style="color:#ff0000"> *</span>
				</label>
                            <div class="col-xs-12 col-sm-10">
                           		<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                            </div>                          
                        
                        </div>
                        <div class="form-group">
                        	<label for="othernames" class="col-xs-12 col-sm-2">Other Names</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="othernames" name="othernames" placeholder="Other Names">
                            </div>
                        </div>
                        <div class="form-group">
                        	<label for="gender" class="col-xs-12 col-sm-2">Gender</label>
                            <div class="col-xs-12 col-sm-10">
                            	<div class="radio">
                                	<label>
                                    	<input type="radio" name="gender" value="M">Male                                       
                                    </label> &nbsp;
                                    <label>                                    	
                                        <input type="radio" name="gender" value="F">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="city" class="col-xs-12 col-sm-2">
					City
					<span style="color:#ff0000"> *</span>
				</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="city" name="city" placeholder="City" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="state" class="col-xs-12 col-sm-2">
					State
					<span style="color:#ff0000"> *</span>
				</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="country" class="col-xs-12 col-sm-2">
					Country
					<span style="color:#ff0000"> *</span>
				</label>
                            <div class="col-xs-12 col-sm-10">
                            	<select id="country" name="country" class="form-control" required>
                                	<option value="">-- Select country --</option>
                                	<!--option value="NG">Nigeria</option-->
					<?php
    						foreach($countries as $countryId => $country) { 
							echo '<option value="' . $countryId . '">' . $country . '</option>';
						}
					?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="phone" class="col-xs-12 col-sm-2">Phone</label>
                            <div class="col-sm-12 col-sm-10">
                            	<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="email" class="col-xs-12 col-sm-2">
					Email 
					<span style="color:#ff0000"> *</span>
				</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="occupation" class="col-xs-12 col-sm-2">Occupation
					<span style="color:#ff0000"> *</span>
				</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" required>
                            </div>                        	
                        </div>
                        
                        <div class="form-group">
                        	<label for="accountType" class="col-xs-12 col-sm-2">Account Type</label>
                            <div class="col-xs-12 col-sm-10">
                            	<select id="accountType" name="accountType" class="form-control">
                                	<option value="">-- Select account type --</option>
                                	<?php require("loadAccountTypes.php"); ?>
                                </select>
                            </div>                        	
                        </div>
                        
                        <div class="row">
                        	<div class="col-xs-12 col-sm-12 col-md-2"></div>
                            <div class="col-xs-12 col-sm-12 col-md-10">
                            	<input type="submit" name="register" class="btn btn-success">
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        
                     </form>
                     
                </div><!-- end of second column //-->
            </div> <!-- end of row //-->                
                   
        </div><!-- end of container //-->
    
    <br>
    <?php
	  require("../footer.php");
	?>
    
    </div><!-- end of container //-->
    
    
    <script src="../js/jquery-1.11.1.min"></script>
    <script src="../js/bootstrap.min.js"></script>
	</body>
</html>

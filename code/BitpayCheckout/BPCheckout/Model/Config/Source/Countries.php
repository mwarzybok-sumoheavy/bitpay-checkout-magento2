<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace BitpayCheckout\BPCheckout\Model\Config\Source;


/**
 * Countries Model
 */
class Countries implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            array('value' => 'AF', 'label'=>Mage::helper('adminhtml')->__('Afghanistan')),
            array('value' => 'AL', 'label'=>Mage::helper('adminhtml')->__('Albania')),
            array('value' => 'AS', 'label'=>Mage::helper('adminhtml')->__('American Samoa')),
            array('value' => 'AD', 'label'=>Mage::helper('adminhtml')->__('Andorra')),
            array('value' => 'AO', 'label'=>Mage::helper('adminhtml')->__('Angola')),
            array('value' => 'AI', 'label'=>Mage::helper('adminhtml')->__('Anguilla')),
            array('value' => 'AQ', 'label'=>Mage::helper('adminhtml')->__('Antarctica')),
            array('value' => 'AG', 'label'=>Mage::helper('adminhtml')->__('Antigua and Barbuda')),
            array('value' => 'AR', 'label'=>Mage::helper('adminhtml')->__('Argentina')),
            array('value' => 'AM', 'label'=>Mage::helper('adminhtml')->__('Armenia')),
            array('value' => 'AW', 'label'=>Mage::helper('adminhtml')->__('Aruba')),
            array('value' => 'AU', 'label'=>Mage::helper('adminhtml')->__('Australia')),
            array('value' => 'AT', 'label'=>Mage::helper('adminhtml')->__('Austria')),
            array('value' => 'AZ', 'label'=>Mage::helper('adminhtml')->__('Azerbaijan')),
            array('value' => 'BS', 'label'=>Mage::helper('adminhtml')->__('Bahamas')),
            array('value' => 'BH', 'label'=>Mage::helper('adminhtml')->__('Bahrain')),
            array('value' => 'BB', 'label'=>Mage::helper('adminhtml')->__('Barbados')),
            array('value' => 'BY', 'label'=>Mage::helper('adminhtml')->__('Belarus')),
            array('value' => 'BE', 'label'=>Mage::helper('adminhtml')->__('Belgium')),
            array('value' => 'BZ', 'label'=>Mage::helper('adminhtml')->__('Belize')),
            array('value' => 'BJ', 'label'=>Mage::helper('adminhtml')->__('Benin')),
            array('value' => 'BM', 'label'=>Mage::helper('adminhtml')->__('Bermuda')),
            array('value' => 'BT', 'label'=>Mage::helper('adminhtml')->__('Bhutan')),
            array('value' => 'BA', 'label'=>Mage::helper('adminhtml')->__('Bosnia and Herzegovina')),
            array('value' => 'BW', 'label'=>Mage::helper('adminhtml')->__('Botswana')),
            array('value' => 'BV', 'label'=>Mage::helper('adminhtml')->__('Bouvet Island')),
            array('value' => 'BR', 'label'=>Mage::helper('adminhtml')->__('Brazil')),
            array('value' => 'IO', 'label'=>Mage::helper('adminhtml')->__('British Indian Ocean Territory')),
            array('value' => 'VG', 'label'=>Mage::helper('adminhtml')->__('British Virgin Islands')),
            array('value' => 'BN', 'label'=>Mage::helper('adminhtml')->__('Brunei')),
            array('value' => 'BG', 'label'=>Mage::helper('adminhtml')->__('Bulgaria')),
            array('value' => 'BF', 'label'=>Mage::helper('adminhtml')->__('Burkina Faso')),
            array('value' => 'BI', 'label'=>Mage::helper('adminhtml')->__('Burundi')),
            array('value' => 'CM', 'label'=>Mage::helper('adminhtml')->__('Cameroon')),
            array('value' => 'CA', 'label'=>Mage::helper('adminhtml')->__('Canada')),
            array('value' => 'CV', 'label'=>Mage::helper('adminhtml')->__('Cape Verde')),
            array('value' => 'KY', 'label'=>Mage::helper('adminhtml')->__('Cayman Islands')),
            array('value' => 'CF', 'label'=>Mage::helper('adminhtml')->__('Central African Republic')),
            array('value' => 'TD', 'label'=>Mage::helper('adminhtml')->__('Chad')),
            array('value' => 'CL', 'label'=>Mage::helper('adminhtml')->__('Chile')),
            array('value' => 'CN', 'label'=>Mage::helper('adminhtml')->__('China')),
            array('value' => 'CX', 'label'=>Mage::helper('adminhtml')->__('Christmas Island')),
            array('value' => 'CC', 'label'=>Mage::helper('adminhtml')->__('Cocos (Keeling Islands')),
            array('value' => 'CO', 'label'=>Mage::helper('adminhtml')->__('Colombia')),
            array('value' => 'KM', 'label'=>Mage::helper('adminhtml')->__('Comoros')),
            array('value' => 'CG', 'label'=>Mage::helper('adminhtml')->__('Congo - Brazzaville')),
            array('value' => 'CD', 'label'=>Mage::helper('adminhtml')->__('Congo - Kinshasa')),
            array('value' => 'CK', 'label'=>Mage::helper('adminhtml')->__('Cook Islands')),
            array('value' => 'CR', 'label'=>Mage::helper('adminhtml')->__('Costa Rica')),
            array('value' => 'HR', 'label'=>Mage::helper('adminhtml')->__('Croatia')),
            array('value' => 'CY', 'label'=>Mage::helper('adminhtml')->__('Cyprus')),
            array('value' => 'CZ', 'label'=>Mage::helper('adminhtml')->__('Czech Republic')),
            array('value' => 'CI', 'label'=>Mage::helper('adminhtml')->__('Côte d’Ivoire')),
            array('value' => 'DK', 'label'=>Mage::helper('adminhtml')->__('Denmark')),
            array('value' => 'DJ', 'label'=>Mage::helper('adminhtml')->__('Djibouti')),
            array('value' => 'DM', 'label'=>Mage::helper('adminhtml')->__('Dominica')),
            array('value' => 'DO', 'label'=>Mage::helper('adminhtml')->__('Dominican Republic')),
            array('value' => 'SV', 'label'=>Mage::helper('adminhtml')->__('El Salvador')),
            array('value' => 'GQ', 'label'=>Mage::helper('adminhtml')->__('Equatorial Guinea')),
            array('value' => 'ER', 'label'=>Mage::helper('adminhtml')->__('Eritrea')),
            array('value' => 'EE', 'label'=>Mage::helper('adminhtml')->__('Estonia')),
            array('value' => 'ET', 'label'=>Mage::helper('adminhtml')->__('Ethiopia')),
            array('value' => 'FK', 'label'=>Mage::helper('adminhtml')->__('Falkland Islands')),
            array('value' => 'FO', 'label'=>Mage::helper('adminhtml')->__('Faroe Islands')),
            array('value' => 'FJ', 'label'=>Mage::helper('adminhtml')->__('Fiji')),
            array('value' => 'FI', 'label'=>Mage::helper('adminhtml')->__('Finland')),
            array('value' => 'FR', 'label'=>Mage::helper('adminhtml')->__('France')),
            array('value' => 'GF', 'label'=>Mage::helper('adminhtml')->__('French Guiana')),
            array('value' => 'PF', 'label'=>Mage::helper('adminhtml')->__('French Polynesia')),
            array('value' => 'TF', 'label'=>Mage::helper('adminhtml')->__('French Southern Territories')),
            array('value' => 'GA', 'label'=>Mage::helper('adminhtml')->__('Gabon')),
            array('value' => 'GM', 'label'=>Mage::helper('adminhtml')->__('Gambia')),
            array('value' => 'GE', 'label'=>Mage::helper('adminhtml')->__('Georgia')),
            array('value' => 'DE', 'label'=>Mage::helper('adminhtml')->__('Germany')),
            array('value' => 'GH', 'label'=>Mage::helper('adminhtml')->__('Ghana')),
            array('value' => 'GI', 'label'=>Mage::helper('adminhtml')->__('Gibraltar')),
            array('value' => 'GR', 'label'=>Mage::helper('adminhtml')->__('Greece')),
            array('value' => 'GL', 'label'=>Mage::helper('adminhtml')->__('Greenland')),
            array('value' => 'GD', 'label'=>Mage::helper('adminhtml')->__('Grenada')),
            array('value' => 'GP', 'label'=>Mage::helper('adminhtml')->__('Guadeloupe')),
            array('value' => 'GU', 'label'=>Mage::helper('adminhtml')->__('Guam')),
            array('value' => 'GT', 'label'=>Mage::helper('adminhtml')->__('Guatemala')),
            array('value' => 'GG', 'label'=>Mage::helper('adminhtml')->__('Guernsey')),
            array('value' => 'GN', 'label'=>Mage::helper('adminhtml')->__('Guinea')),
            array('value' => 'GW', 'label'=>Mage::helper('adminhtml')->__('Guinea-Bissau')),
            array('value' => 'GY', 'label'=>Mage::helper('adminhtml')->__('Guyana')),
            array('value' => 'HT', 'label'=>Mage::helper('adminhtml')->__('Haiti')),
            array('value' => 'HM', 'label'=>Mage::helper('adminhtml')->__('Heard &amp; McDonald Islands')),
            array('value' => 'HN', 'label'=>Mage::helper('adminhtml')->__('Honduras')),
            array('value' => 'HK', 'label'=>Mage::helper('adminhtml')->__('Hong Kong SAR China')),
            array('value' => 'HU', 'label'=>Mage::helper('adminhtml')->__('Hungary')),
            array('value' => 'IS', 'label'=>Mage::helper('adminhtml')->__('Iceland')),
            array('value' => 'IN', 'label'=>Mage::helper('adminhtml')->__('India')),
            array('value' => 'IE', 'label'=>Mage::helper('adminhtml')->__('Ireland')),
            array('value' => 'IM', 'label'=>Mage::helper('adminhtml')->__('Isle of Man')),
            array('value' => 'IL', 'label'=>Mage::helper('adminhtml')->__('Israel')),
            array('value' => 'IT', 'label'=>Mage::helper('adminhtml')->__('Italy')),
            array('value' => 'JM', 'label'=>Mage::helper('adminhtml')->__('Jamaica')),
            array('value' => 'JP', 'label'=>Mage::helper('adminhtml')->__('Japan')),
            array('value' => 'JE', 'label'=>Mage::helper('adminhtml')->__('Jersey')),
            array('value' => 'JO', 'label'=>Mage::helper('adminhtml')->__('Jordan')),
            array('value' => 'KZ', 'label'=>Mage::helper('adminhtml')->__('Kazakhstan')),
            array('value' => 'KE', 'label'=>Mage::helper('adminhtml')->__('Kenya')),
            array('value' => 'KI', 'label'=>Mage::helper('adminhtml')->__('Kiribati')),
            array('value' => 'KW', 'label'=>Mage::helper('adminhtml')->__('Kuwait')),
            array('value' => 'LA', 'label'=>Mage::helper('adminhtml')->__('Laos')),
            array('value' => 'LV', 'label'=>Mage::helper('adminhtml')->__('Latvia')),
            array('value' => 'LB', 'label'=>Mage::helper('adminhtml')->__('Lebanon')),
            array('value' => 'LS', 'label'=>Mage::helper('adminhtml')->__('Lesotho')),
            array('value' => 'LR', 'label'=>Mage::helper('adminhtml')->__('Liberia')),
            array('value' => 'LY', 'label'=>Mage::helper('adminhtml')->__('Libya')),
            array('value' => 'LI', 'label'=>Mage::helper('adminhtml')->__('Liechtenstein')),
            array('value' => 'LT', 'label'=>Mage::helper('adminhtml')->__('Lithuania')),
            array('value' => 'LU', 'label'=>Mage::helper('adminhtml')->__('Luxembourg')),
            array('value' => 'MO', 'label'=>Mage::helper('adminhtml')->__('Macau SAR China')),
            array('value' => 'MK', 'label'=>Mage::helper('adminhtml')->__('Macedonia')),
            array('value' => 'MG', 'label'=>Mage::helper('adminhtml')->__('Madagascar')),
            array('value' => 'MW', 'label'=>Mage::helper('adminhtml')->__('Malawi')),
            array('value' => 'MY', 'label'=>Mage::helper('adminhtml')->__('Malaysia')),
            array('value' => 'MV', 'label'=>Mage::helper('adminhtml')->__('Maldives')),
            array('value' => 'ML', 'label'=>Mage::helper('adminhtml')->__('Mali')),
            array('value' => 'MT', 'label'=>Mage::helper('adminhtml')->__('Malta')),
            array('value' => 'MH', 'label'=>Mage::helper('adminhtml')->__('Marshall Islands')),
            array('value' => 'MQ', 'label'=>Mage::helper('adminhtml')->__('Martinique')),
            array('value' => 'MR', 'label'=>Mage::helper('adminhtml')->__('Mauritania')),
            array('value' => 'MU', 'label'=>Mage::helper('adminhtml')->__('Mauritius')),
            array('value' => 'YT', 'label'=>Mage::helper('adminhtml')->__('Mayotte')),
            array('value' => 'MX', 'label'=>Mage::helper('adminhtml')->__('Mexico')),
            array('value' => 'FM', 'label'=>Mage::helper('adminhtml')->__('Micronesia')),
            array('value' => 'MD', 'label'=>Mage::helper('adminhtml')->__('Moldova')),
            array('value' => 'MC', 'label'=>Mage::helper('adminhtml')->__('Monaco')),
            array('value' => 'MN', 'label'=>Mage::helper('adminhtml')->__('Mongolia')),
            array('value' => 'ME', 'label'=>Mage::helper('adminhtml')->__('Montenegro')),
            array('value' => 'MS', 'label'=>Mage::helper('adminhtml')->__('Montserrat')),
            array('value' => 'MZ', 'label'=>Mage::helper('adminhtml')->__('Mozambique')),
            array('value' => 'MM', 'label'=>Mage::helper('adminhtml')->__('Myanmar (Burma')),
            array('value' => 'NA', 'label'=>Mage::helper('adminhtml')->__('Namibia')),
            array('value' => 'NR', 'label'=>Mage::helper('adminhtml')->__('Nauru')),
            array('value' => 'NL', 'label'=>Mage::helper('adminhtml')->__('Netherlands')),
            array('value' => 'AN', 'label'=>Mage::helper('adminhtml')->__('Netherlands Antilles')),
            array('value' => 'NC', 'label'=>Mage::helper('adminhtml')->__('New Caledonia')),
            array('value' => 'NZ', 'label'=>Mage::helper('adminhtml')->__('New Zealand')),
            array('value' => 'NI', 'label'=>Mage::helper('adminhtml')->__('Nicaragua')),
            array('value' => 'NE', 'label'=>Mage::helper('adminhtml')->__('Niger')),
            array('value' => 'NG', 'label'=>Mage::helper('adminhtml')->__('Nigeria')),
            array('value' => 'NU', 'label'=>Mage::helper('adminhtml')->__('Niue')),
            array('value' => 'NF', 'label'=>Mage::helper('adminhtml')->__('Norfolk Island')),
            array('value' => 'MP', 'label'=>Mage::helper('adminhtml')->__('Northern Mariana Islands')),
            array('value' => 'NO', 'label'=>Mage::helper('adminhtml')->__('Norway')),
            array('value' => 'OM', 'label'=>Mage::helper('adminhtml')->__('Oman')),
            array('value' => 'PK', 'label'=>Mage::helper('adminhtml')->__('Pakistan')),
            array('value' => 'PW', 'label'=>Mage::helper('adminhtml')->__('Palau')),
            array('value' => 'PS', 'label'=>Mage::helper('adminhtml')->__('Palestinian Territories')),
            array('value' => 'PA', 'label'=>Mage::helper('adminhtml')->__('Panama')),
            array('value' => 'PG', 'label'=>Mage::helper('adminhtml')->__('Papua New Guinea')),
            array('value' => 'PY', 'label'=>Mage::helper('adminhtml')->__('Paraguay')),
            array('value' => 'PE', 'label'=>Mage::helper('adminhtml')->__('Peru')),
            array('value' => 'PH', 'label'=>Mage::helper('adminhtml')->__('Philippines')),
            array('value' => 'PN', 'label'=>Mage::helper('adminhtml')->__('Pitcairn Islands')),
            array('value' => 'PL', 'label'=>Mage::helper('adminhtml')->__('Poland')),
            array('value' => 'PT', 'label'=>Mage::helper('adminhtml')->__('Portugal')),
            array('value' => 'PR', 'label'=>Mage::helper('adminhtml')->__('Puerto Rico')),
            array('value' => 'QA', 'label'=>Mage::helper('adminhtml')->__('Qatar')),
            array('value' => 'RO', 'label'=>Mage::helper('adminhtml')->__('Romania')),
            array('value' => 'RU', 'label'=>Mage::helper('adminhtml')->__('Russia')),
            array('value' => 'RW', 'label'=>Mage::helper('adminhtml')->__('Rwanda')),
            array('value' => 'RE', 'label'=>Mage::helper('adminhtml')->__('Réunion')),
            array('value' => 'BL', 'label'=>Mage::helper('adminhtml')->__('Saint Barthélemy')),
            array('value' => 'SH', 'label'=>Mage::helper('adminhtml')->__('Saint Helena')),
            array('value' => 'KN', 'label'=>Mage::helper('adminhtml')->__('Saint Kitts and Nevis')),
            array('value' => 'LC', 'label'=>Mage::helper('adminhtml')->__('Saint Lucia')),
            array('value' => 'MF', 'label'=>Mage::helper('adminhtml')->__('Saint Martin')),
            array('value' => 'PM', 'label'=>Mage::helper('adminhtml')->__('Saint Pierre and Miquelon')),
            array('value' => 'WS', 'label'=>Mage::helper('adminhtml')->__('Samoa')),
            array('value' => 'SM', 'label'=>Mage::helper('adminhtml')->__('San Marino')),
            array('value' => 'SA', 'label'=>Mage::helper('adminhtml')->__('Saudi Arabia')),
            array('value' => 'SN', 'label'=>Mage::helper('adminhtml')->__('Senegal')),
            array('value' => 'RS', 'label'=>Mage::helper('adminhtml')->__('Serbia')),
            array('value' => 'SC', 'label'=>Mage::helper('adminhtml')->__('Seychelles')),
            array('value' => 'SL', 'label'=>Mage::helper('adminhtml')->__('Sierra Leone')),
            array('value' => 'SG', 'label'=>Mage::helper('adminhtml')->__('Singapore')),
            array('value' => 'SK', 'label'=>Mage::helper('adminhtml')->__('Slovakia')),
            array('value' => 'SI', 'label'=>Mage::helper('adminhtml')->__('Slovenia')),
            array('value' => 'SB', 'label'=>Mage::helper('adminhtml')->__('Solomon Islands')),
            array('value' => 'SO', 'label'=>Mage::helper('adminhtml')->__('Somalia')),
            array('value' => 'ZA', 'label'=>Mage::helper('adminhtml')->__('South Africa')),
            array('value' => 'GS', 'label'=>Mage::helper('adminhtml')->__('South Georgia &amp; South Sandwich Islands')),
            array('value' => 'KR', 'label'=>Mage::helper('adminhtml')->__('South Korea')),
            array('value' => 'ES', 'label'=>Mage::helper('adminhtml')->__('Spain')),
            array('value' => 'LK', 'label'=>Mage::helper('adminhtml')->__('Sri Lanka')),
            array('value' => 'VC', 'label'=>Mage::helper('adminhtml')->__('St. Vincent &amp; Grenadines')),
            array('value' => 'SD', 'label'=>Mage::helper('adminhtml')->__('Sudan')),
            array('value' => 'SR', 'label'=>Mage::helper('adminhtml')->__('Suriname')),
            array('value' => 'SJ', 'label'=>Mage::helper('adminhtml')->__('Svalbard and Jan Mayen')),
            array('value' => 'SZ', 'label'=>Mage::helper('adminhtml')->__('Swaziland')),
            array('value' => 'SE', 'label'=>Mage::helper('adminhtml')->__('Sweden')),
            array('value' => 'CH', 'label'=>Mage::helper('adminhtml')->__('Switzerland')),
            array('value' => 'ST', 'label'=>Mage::helper('adminhtml')->__('São Tomé and Príncipe')),
            array('value' => 'TW', 'label'=>Mage::helper('adminhtml')->__('Taiwan')),
            array('value' => 'TJ', 'label'=>Mage::helper('adminhtml')->__('Tajikistan')),
            array('value' => 'TZ', 'label'=>Mage::helper('adminhtml')->__('Tanzania')),
            array('value' => 'TH', 'label'=>Mage::helper('adminhtml')->__('Thailand')),
            array('value' => 'TL', 'label'=>Mage::helper('adminhtml')->__('Timor-Leste')),
            array('value' => 'TG', 'label'=>Mage::helper('adminhtml')->__('Togo')),
            array('value' => 'TK', 'label'=>Mage::helper('adminhtml')->__('Tokelau')),
            array('value' => 'TO', 'label'=>Mage::helper('adminhtml')->__('Tonga')),
            array('value' => 'TT', 'label'=>Mage::helper('adminhtml')->__('Trinidad and Tobago')),
            array('value' => 'TN', 'label'=>Mage::helper('adminhtml')->__('Tunisia')),
            array('value' => 'TR', 'label'=>Mage::helper('adminhtml')->__('Turkey')),
            array('value' => 'TM', 'label'=>Mage::helper('adminhtml')->__('Turkmenistan')),
            array('value' => 'TC', 'label'=>Mage::helper('adminhtml')->__('Turks and Caicos Islands')),
            array('value' => 'TV', 'label'=>Mage::helper('adminhtml')->__('Tuvalu')),
            array('value' => 'UM', 'label'=>Mage::helper('adminhtml')->__('U.S. Outlying Islands')),
            array('value' => 'VI', 'label'=>Mage::helper('adminhtml')->__('U.S. Virgin Islands')),
            array('value' => 'UG', 'label'=>Mage::helper('adminhtml')->__('Uganda')),
            array('value' => 'UA', 'label'=>Mage::helper('adminhtml')->__('Ukraine')),
            array('value' => 'AE', 'label'=>Mage::helper('adminhtml')->__('United Arab Emirates')),
            array('value' => 'GB', 'label'=>Mage::helper('adminhtml')->__('United Kingdom')),
            array('value' => 'US', 'label'=>Mage::helper('adminhtml')->__('United States')),
            array('value' => 'UY', 'label'=>Mage::helper('adminhtml')->__('Uruguay')),
            array('value' => 'UZ', 'label'=>Mage::helper('adminhtml')->__('Uzbekistan')),
            array('value' => 'VU', 'label'=>Mage::helper('adminhtml')->__('Vanuatu')),
            array('value' => 'VA', 'label'=>Mage::helper('adminhtml')->__('Vatican City')),
            array('value' => 'VE', 'label'=>Mage::helper('adminhtml')->__('Venezuela')),
            array('value' => 'WF', 'label'=>Mage::helper('adminhtml')->__('Wallis and Futuna')),
            array('value' => 'EH', 'label'=>Mage::helper('adminhtml')->__('Western Sahara')),
            array('value' => 'YE', 'label'=>Mage::helper('adminhtml')->__('Yemen')),
            array('value' => 'ZM', 'label'=>Mage::helper('adminhtml')->__('Zambia')),
            array('value' => 'ZW', 'label'=>Mage::helper('adminhtml')->__('Zimbabwe')),
            array('value' => 'AX', 'label'=>Mage::helper('adminhtml')->__('Åland Islands'))
        ];

    }
}

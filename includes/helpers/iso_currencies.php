<?php
/**
* Payzone Payment Gateway
* ========================================
* Web:   http://payzone.co.uk
* Email:  online@payzone.com
* Authors: Payzone, Keith Rigby
*/
namespace Payzone\Helpers\ISO;

if (count(get_included_files()) ==1) {
    exit("Direct access not permitted.");
}

/**
 * [ISOCurrencies  list mapping for name to code conversion]
 */
class ISOCurrencies
{
	/**
	 * [getISOCurrencyList  list mapping for name to code conversion]
	 * @method getISOCurrencyList
	 * @return [Object]            [list object with currencies added]
	 */
	public static function getISOCurrencyList()
	{
		$iclISOCurrencyList = new  \Payzone\Gateway\Common\ISOCurrencyList();
		$iclISOCurrencyList->add(634, "Qatari Rial","QAR", 2);
		$iclISOCurrencyList->add(566, "Naira", "NGN", 2);
		$iclISOCurrencyList->add(678, "Dobra", "STD", 2);
		$iclISOCurrencyList->add(943, "Metical", "MZN", 2);
		$iclISOCurrencyList->add(826, "Pound Sterling", "GBP", 2, '&#163;');
		$iclISOCurrencyList->add(654, "Saint Helena Pound", "SHP", 2);
		$iclISOCurrencyList->add(704, "Vietnamese ??ng", "VND", 2);
		$iclISOCurrencyList->add(952, "CFA Franc BCEAO", "XOF", 0);
		$iclISOCurrencyList->add(356, "Indian Rupee", "INR", 2);
		$iclISOCurrencyList->add(807, "Denar", "MKD", 2);
		$iclISOCurrencyList->add(959, "Gold (one Troy ounce)", "XAU", 0);
		$iclISOCurrencyList->add(410, "South Korean Won", "KRW", 0);
		$iclISOCurrencyList->add(946, "Romanian New Leu", "RON", 2);
		$iclISOCurrencyList->add(949, "New Turkish Lira", "TRY", 2);
		$iclISOCurrencyList->add(532, "Netherlands Antillian Guilder", "ANG", 2);
		$iclISOCurrencyList->add(788, "Tunisian Dinar", "TND", 3);
		$iclISOCurrencyList->add(646, "Rwanda Franc", "RWF", 0);
		$iclISOCurrencyList->add(504, "Moroccan Dirham", "MAD", 2);
		$iclISOCurrencyList->add(174, "Comoro Franc", "KMF", 0);
		$iclISOCurrencyList->add(484, "Mexican Peso", "MXN", 2);
		$iclISOCurrencyList->add(478, "Ouguiya", "MRO", 2);
		$iclISOCurrencyList->add(233, "Kroon", "EEK", 2);
		$iclISOCurrencyList->add(400, "Jordanian Dinar", "JOD", 3);
		$iclISOCurrencyList->add(292, "Gibraltar pound", "GIP", 2);
		$iclISOCurrencyList->add(690, "Seychelles Rupee", "SCR", 2);
		$iclISOCurrencyList->add(422, "Lebanese Pound", "LBP", 2);
		$iclISOCurrencyList->add(232, "Nakfa", "ERN", 2);
		$iclISOCurrencyList->add(496, "Tugrik", "MNT", 2);
		$iclISOCurrencyList->add(328, "Guyana Dollar", "GYD", 2);
		$iclISOCurrencyList->add(970, "Unidad de Valor Real", "COU", 2);
		$iclISOCurrencyList->add(974, "Belarusian Ruble", "BYR", 0);
		$iclISOCurrencyList->add(608, "Philippine Peso", "PHP", 2);
		$iclISOCurrencyList->add(598, "Kina", "PGK", 2);
		$iclISOCurrencyList->add(951, "East Caribbean Dollar", "XCD", 2);
		$iclISOCurrencyList->add(52,  "Barbados Dollar", "BBD", 2);
		$iclISOCurrencyList->add(944, "Azerbaijanian Manat", "AZN", 2);
		$iclISOCurrencyList->add(434, "Libyan Dinar", "LYD", 3);
		$iclISOCurrencyList->add(706, "Somali Shilling", "SOS", 2);
		$iclISOCurrencyList->add(950, "CFA Franc BEAC", "XAF", 0);
		$iclISOCurrencyList->add(840, "US Dollar", "USD", 2, '&#036;');
		$iclISOCurrencyList->add(68,  "Boliviano", "BOB", 2);
		$iclISOCurrencyList->add(214, "Dominican Peso", "DOP", 2);
		$iclISOCurrencyList->add(818, "Egyptian Pound", "EGP", 2);
		$iclISOCurrencyList->add(170, "Colombian Peso", "COP", 2);
		$iclISOCurrencyList->add(986, "Brazilian Real", "BRL", 2);
		$iclISOCurrencyList->add(961, "Silver (one Troy ounce)", "XAG", 0);
		$iclISOCurrencyList->add(973, "Kwanza", "AOA", 2);
		$iclISOCurrencyList->add(962, "Platinum (one Troy ounce)", "XPT", 0);
		$iclISOCurrencyList->add(414, "Kuwaiti Dinar", "KWD", 3);
		$iclISOCurrencyList->add(604, "Nuevo Sol", "PEN", 2);
		$iclISOCurrencyList->add(702, "Singapore Dollar", "SGD", 2);
		$iclISOCurrencyList->add(862, "Venezuelan bol�var", "VEB", 2);
		$iclISOCurrencyList->add(953, "CFP franc", "XPF", 0);
		$iclISOCurrencyList->add(558, "Cordoba Oro", "NIO", 2);
		$iclISOCurrencyList->add(348, "Forint", "HUF", 2);
		$iclISOCurrencyList->add(948, "WIR Franc ", "CHW", 2);
		$iclISOCurrencyList->add(116, "Riel", "KHR", 2);
		$iclISOCurrencyList->add(956, "European Monetary Unit", "XBB", 0);
		$iclISOCurrencyList->add(156, "Yuan Renminbi", "CNY", 2);
		$iclISOCurrencyList->add(834, "Tanzanian Shilling", "TZS", 2);
		$iclISOCurrencyList->add(997, "", "USN", 2);
		$iclISOCurrencyList->add(981, "Lari", "GEL", 2);
		$iclISOCurrencyList->add(242, "Fiji Dollar", "FJD", 2);
		$iclISOCurrencyList->add(941, "Serbian Dinar", "RSD", 2);
		$iclISOCurrencyList->add(104, "Kyat", "MMK", 2);
		$iclISOCurrencyList->add(84, " Belize Dollar", "BZD", 2);
		$iclISOCurrencyList->add(710, "South African Rand", "ZAR", 2);
		$iclISOCurrencyList->add(760, "Syrian Pound", "SYP", 2);
		$iclISOCurrencyList->add(512, "Rial Omani", "OMR", 3);
		$iclISOCurrencyList->add(324, "Guinea Franc", "GNF", 0);
		$iclISOCurrencyList->add(196, "Cyprus Pound", "CYP", 2);
		$iclISOCurrencyList->add(960, "Special Drawing Rights", "XDR", 0);
		$iclISOCurrencyList->add(716, "Zimbabwe Dollar", "ZWD", 2);
		$iclISOCurrencyList->add(972, "Somoni", "TJS", 2);
		$iclISOCurrencyList->add(462, "Rufiyaa", "MVR", 2);
		$iclISOCurrencyList->add(979, "Mexican Unidad de Inversion (UDI)", "MXV", 2);
		$iclISOCurrencyList->add(860, "Uzbekistan Som", "UZS", 2);
		$iclISOCurrencyList->add(12,  "Algerian Dinar", "DZD", 2);
		$iclISOCurrencyList->add(332, "Haiti Gourde", "HTG", 2);
		$iclISOCurrencyList->add(963, "Code reserved for testing purposes", "XTS", 0);
		$iclISOCurrencyList->add(32,  "Argentine Peso", "ARS", 2);
		$iclISOCurrencyList->add(642, "Romanian Leu", "ROL", 2);
		$iclISOCurrencyList->add(984, "Bolivian Mvdol (Funds code)", "BOV", 2);
		$iclISOCurrencyList->add(440, "Lithuanian Litas", "LTL", 2);
		$iclISOCurrencyList->add(480, "Mauritius Rupee", "MUR", 2);
		$iclISOCurrencyList->add(426, "Loti", "LSL", 2);
		$iclISOCurrencyList->add(262, "Djibouti Franc", "DJF", 0);
		$iclISOCurrencyList->add(886, "Yemeni Rial", "YER", 2);
		$iclISOCurrencyList->add(748, "Lilangeni", "SZL", 2);
		$iclISOCurrencyList->add(192, "Cuban Peso", "CUP", 2);
		$iclISOCurrencyList->add(548, "Vatu", "VUV", 0);
		$iclISOCurrencyList->add(360, "Rupiah", "IDR", 2);
		$iclISOCurrencyList->add(51,  "Armenian Dram", "AMD", 2);
		$iclISOCurrencyList->add(894, "Kwacha", "ZMK", 2);
		$iclISOCurrencyList->add(90,  "Solomon Islands Dollar", "SBD", 2);
		$iclISOCurrencyList->add(132, "Cape Verde Escudo", "CVE", 2);
		$iclISOCurrencyList->add(999, "No currency", "XXX", 0);
		$iclISOCurrencyList->add(524, "Nepalese Rupee", "NPR", 2);
		$iclISOCurrencyList->add(203, "Czech Koruna", "CZK", 2);
		$iclISOCurrencyList->add(44,  "Bahamian Dollar", "BSD", 2);
		$iclISOCurrencyList->add(96,  "Brunei Dollar", "BND", 2);
		$iclISOCurrencyList->add(50,  "Bangladeshi Taka", "BDT", 2);
		$iclISOCurrencyList->add(404, "Kenyan Shilling", "KES", 2);
		$iclISOCurrencyList->add(947, "WIR Euro ", "CHE", 2);
		$iclISOCurrencyList->add(964, "Palladium (one Troy ounce)", "XPD", 0);
		$iclISOCurrencyList->add(398, "Tenge", "KZT", 2);
		$iclISOCurrencyList->add(352, "Iceland Krona", "ISK", 2);
		$iclISOCurrencyList->add(64,  "Ngultrum", "BTN", 2);
		$iclISOCurrencyList->add(533, "Aruban Guilder", "AWG", 2);
		$iclISOCurrencyList->add(230, "Ethiopian Birr", "ETB", 2);
		$iclISOCurrencyList->add(800, "Uganda Shilling", "UGX", 2);
		$iclISOCurrencyList->add(968, "Surinam Dollar", "SRD", 2);
		$iclISOCurrencyList->add(882, "Samoan Tala", "WST", 2);
		$iclISOCurrencyList->add(454, "Kwacha", "MWK", 2);
		$iclISOCurrencyList->add(985, "Zloty", "PLN", 2);
		$iclISOCurrencyList->add(124, "Canadian Dollar", "CAD", 2);
		$iclISOCurrencyList->add(776, "Pa'anga", "TOP", 2);
		$iclISOCurrencyList->add(208, "Danish Krone", "DKK", 2);
		$iclISOCurrencyList->add(108, "Burundian Franc", "BIF", 0);
		$iclISOCurrencyList->add(764, "Baht", "THB", 2);
		$iclISOCurrencyList->add(458, "Malaysian Ringgit", "MYR", 2);
		$iclISOCurrencyList->add(364, "Iranian Rial", "IRR", 2);
		$iclISOCurrencyList->add(600, "Guarani", "PYG", 0);
		$iclISOCurrencyList->add(977, "Convertible Marks", "BAM", 2);
		$iclISOCurrencyList->add(446, "Pataca", "MOP", 2);
		$iclISOCurrencyList->add(780, "Trinidad and Tobago Dollar", "TTD", 2);
		$iclISOCurrencyList->add(703, "Slovak Koruna", "SKK", 2);
		$iclISOCurrencyList->add(958, "European Unit of Account 17 (E.U.A.-17)", "XBD", 0);
		$iclISOCurrencyList->add(430, "Liberian Dollar", "LRD", 2);
		$iclISOCurrencyList->add(191, "Croatian Kuna", "HRK", 2);
		$iclISOCurrencyList->add(694, "Leone", "SLL", 2);
		$iclISOCurrencyList->add(756, "Swiss Franc", "CHF", 2);
		$iclISOCurrencyList->add(969, "Malagasy Ariary", "MGA", 0);
		$iclISOCurrencyList->add(270, "Dalasi", "GMD", 2);
		$iclISOCurrencyList->add(418, "Kip", "LAK", 2);
		$iclISOCurrencyList->add(516, "Namibian Dollar", "NAD", 2);
		$iclISOCurrencyList->add(392, "Japanese yen", "JPY", 0);
		$iclISOCurrencyList->add(320, "Quetzal", "GTQ", 2);
		$iclISOCurrencyList->add(554, "New Zealand Dollar", "NZD", 2);
		$iclISOCurrencyList->add(578, "Norwegian Krone", "NOK", 2);
		$iclISOCurrencyList->add(376, "New Israeli Shekel", "ILS", 2);
		$iclISOCurrencyList->add(957, "European Unit of Account 9 (E.U.A.-9)", "XBC", 0);
		$iclISOCurrencyList->add(498, "Moldovan Leu", "MDL", 2);
		$iclISOCurrencyList->add(998, "", "USS", 2);
		$iclISOCurrencyList->add(955, "European Composite Unit (EURCO)", "XBA", 0);
		$iclISOCurrencyList->add(344, "Hong Kong Dollar", "HKD", 2);
		$iclISOCurrencyList->add(417, "Som", "KGS", 2);
		$iclISOCurrencyList->add(858, "Peso Uruguayo", "UYU", 2);
		$iclISOCurrencyList->add(60,  "Bermudian Dollar ", "BMD", 2);
		$iclISOCurrencyList->add(682, "Saudi Riyal", "SAR", 2);
		$iclISOCurrencyList->add(643, "Russian Ruble", "RUB", 2);
		$iclISOCurrencyList->add(470, "Maltese Lira", "MTL", 2);
		$iclISOCurrencyList->add(340, "Lempira", "HNL", 2);
		$iclISOCurrencyList->add(72,  "Pula", "BWP", 2);
		$iclISOCurrencyList->add(368, "Iraqi Dinar", "IQD", 3);
		$iclISOCurrencyList->add(188, "Costa Rican Colon", "CRC", 2);
		$iclISOCurrencyList->add(144, "Sri Lanka Rupee", "LKR", 2);
		$iclISOCurrencyList->add(752, "Swedish Krona", "SEK", 2);
		$iclISOCurrencyList->add(136, "Cayman Islands Dollar", "KYD", 2);
		$iclISOCurrencyList->add(8,   "Lek", "ALL", 2);
		$iclISOCurrencyList->add(48,  "Bahraini Dinar", "BHD", 3);
		$iclISOCurrencyList->add(795, "Manat", "TMM", 2);
		$iclISOCurrencyList->add(938, "Sudanese Pound", "SDG", 2);
		$iclISOCurrencyList->add(590, "Balboa", "PAB", 2);
		$iclISOCurrencyList->add(152, "Chilean Peso", "CLP", 0);
		$iclISOCurrencyList->add(980, "Hryvnia", "UAH", 2);
		$iclISOCurrencyList->add(428, "Latvian Lats", "LVL", 2);
		$iclISOCurrencyList->add(288, "Cedi", "GHS", 2);
		$iclISOCurrencyList->add(978, "Euro", "EUR", 2, '&#128;');
		$iclISOCurrencyList->add(976, "Franc Congolais", "CDF", 2);
		$iclISOCurrencyList->add(586, "Pakistan Rupee", "PKR", 2);
		$iclISOCurrencyList->add(408, "North Korean Won", "KPW", 2);
		$iclISOCurrencyList->add(388, "Jamaican Dollar", "JMD", 2);
		$iclISOCurrencyList->add(990, "Unidades de formento", "CLF", 0);
		$iclISOCurrencyList->add(971, "Afghani", "AFN", 2);
		$iclISOCurrencyList->add(975, "Bulgarian Lev", "BGN", 2);
		$iclISOCurrencyList->add(36,  "Australian Dollar", "AUD", 2);
		$iclISOCurrencyList->add(238, "Falkland Islands Pound", "FKP", 2);
		$iclISOCurrencyList->add(901, "New Taiwan Dollar", "TWD", 2);
		$iclISOCurrencyList->add(784, "United Arab Emirates dirham", "AED", 2);

		return $iclISOCurrencyList;
	}
}

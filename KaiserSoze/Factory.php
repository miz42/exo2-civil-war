class Core_Library_Export_Factory
{
	public static function getBuilderFor($sExtension = 'csv')
	{
		switch ($sExtension) {
			case 'csv' :
				return new Core_Library_Export_CsvBuilder();
			case 'csv' :
				return new Core_Library_Export_CsvBuilder2();
			case 'dta' :
				return new Core_Library_Export_DtaBuilder();
			case 'gss' :
				return new Core_Library_Export_GssBuilder();
			case 'xls' :
				return new Core_Library_Export_ExcelBuilder( 'xls');
			case 'xlsx' :
				return new Core_Library_Export_ExcelBuilder('xlsx');
			case 'codebook' :
				return new Core_Library_Export_CodebookBuilder();
			case 'ods' :
				return null;
			default :
				return null
		}
	}
}


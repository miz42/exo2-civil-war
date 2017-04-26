class Core_Library_Export_Factory
{
	public static function getBuilderFor($sExtension = 'csv')
	{
		switch ($sExtension) {
			case 'csv' :
				return new Core_Library_Export_CsvBuilder();
			case 'ods' :
				return null;
			default :
				return null
		}
	}
}


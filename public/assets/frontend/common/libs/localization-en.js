// названия в $ (например, $value$) - подставляемые параметры
window.appLocalization = {
	locales: 'en',
	file: {
		mb: 'MB',
		kb: 'KB',
		b: 'B',
		maxSizeErr: 'Maximum overall file size exceeded',
		maxCountErr: 'Maximum number of files exceeded',
		formatErr: 'Invalid format',
		nameSizeErr: 'File name may not exceed $value$ characters'
	},
	MonthPicker: {
		emptyValue: 'Month Year',
		separator: '.',
		plugin: {
			year: 'year',
			prevYear: 'Previous Year',
			nextYear: 'Next Year',
			next12Years: 'Jump Forward 12 Years',
			prev12Years: 'Jump Back 12 Years',
			nextLabel: 'Next',
			prevLabel: 'Prev',
			buttonText: 'Open Month Chooser',
			jumpYears: 'Jump Years',
			backTo: 'Back to',
			months: ['January', 'February', 'March', 'April', 'May', 'June',
				'July', 'August', 'September', 'October', 'November', 'December']
		}
	},
	QuarterPicker: {
		emptyValue: 'Quarter Year',
		separator: '.',
		plugin: {
			year: 'year',
			prevYear: 'Previous Year',
			nextYear: 'Next Year',
			next12Years: 'Jump Forward 12 Years',
			prev12Years: 'Jump Back 12 Years',
			nextLabel: 'Next',
			prevLabel: 'Prev',
			buttonText: 'Open Quarter Chooser',
			jumpYears: 'Jump Years',
			backTo: 'Back to',
			quarters: ['I quarter', 'II quarter', 'III quarter', 'IV quarter']
		}
	},
	datepicker: {
		emptyValue: 'DD.MM.YYYY',
		plugin: {
			closeText: 'Done',
			prevText: 'Prev',
			nextText: 'Next',
			currentText: 'Today',
			monthNames: ['January', 'February', 'March', 'April', 'May', 'June',
				'July', 'August', 'September', 'October', 'November', 'December'],
			monthNamesShort: ['January', 'February', 'March', 'April', 'May', 'June',
				'July', 'August', 'September', 'October', 'November', 'December'],
			dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
			weekHeader: 'Wk',
			dateFormat: 'dd.mm.yy',
			firstDay: 0,
			isRTL: false,
			showMonthAfterYear: false,
			yearSuffix: ''
		}
	},
	decadepicker: {
		emptyValue: 'Decade.MM.YYYY',
		plugin: {
			closeText: 'Done',
			prevText: 'Prev',
			nextText: 'Next',
			currentText: 'Today',
			decadeName: 'decade',
			monthNames: ['January', 'February', 'March', 'April', 'May', 'June',
				'July', 'August', 'September', 'October', 'November', 'December'],
			monthNamesShort: ['January', 'February', 'March', 'April', 'May', 'June',
				'July', 'August', 'September', 'October', 'November', 'December'],
			dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
			dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
			weekHeader: 'Wk',
			dateFormat: 'd.mm.yy',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			yearSuffix: ''
		}
	},
	yearpicker: {
		emptyValue: 'Year'
	},
	textarea: {
		charsLeft: 'Characters left:',
		extraChars: 'Extra characters (please remove):'
	},
	filter: {
		selected: 'Selected'
	},
	subscription: {
		text: ['Topic $count$ added', 'Topics $count$ added', '$count$ topics added']
	}
};

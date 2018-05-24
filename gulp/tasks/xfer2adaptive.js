const gulp = require('gulp');
//const cleanCSS = require('gulp-clean-css');
//const less = require('gulp-less');
const rename = require('gulp-rename');
const path = require('path');
const del = require('del');
const removeCode = require('gulp-remove-code');

const analysis      = '//WWWDEV/website/adaptive/analysis/includes';
const coal          = '//WWWDEV/website/adaptive/coal/includes';
const consumption   = '//WWWDEV/website/adaptive/consumption/includes';
const electricity   = '//WWWDEV/website/adaptive/electricity/includes';
const environment   = '//WWWDEV/website/adaptive/environment/includes';
const finance       = '//WWWDEV/website/adaptive/finance/includes';
const naturalGas    = '//WWWDEV/website/adaptive/naturalgas/includes';
const nuclear       = '//WWWDEV/website/adaptive/nuclear/includes';
const petroleum     = '//WWWDEV/website/adaptive/petroleum/includes';
const renewable     = '//WWWDEV/website/adaptive/renewable/includes';
const totalEnergyMonthly   	= '//WWWDEV/website/adaptive/totalenergy/data/monthly/includes';
const totalEnergyAnnual   	= '//WWWDEV/website/adaptive/totalenergy/data/annual/includes';
const styleFolder   = '//WWWDEV/website/adaptive/style-guide/assets/styles';









gulp.task('xfer2adaptive', ['xfer-analysis']);

gulp.task('xfer-analysis', ['xfer-coal'], () =>
	gulp.src('./analysis/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(analysis))
);
gulp.task('xfer-coal', ['xfer-consumption'], () =>
	gulp.src('./coal/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(coal))
);
gulp.task('xfer-consumption', ['xfer-electricity'], () =>
	gulp.src('./consumptionl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(consumption))
);
gulp.task('xfer-electricity', ['xfer-environment'], () =>
	gulp.src('./electricityl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(electricity))
);
gulp.task('xfer-environment', ['xfer-finance'], () =>
	gulp.src('./environmentl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(environment))
);
gulp.task('xfer-finance', ['xfer-natural-gas'], () =>
	gulp.src('./financel/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(finance))
);
gulp.task('xfer-natural-gas', ['xfer-nuclear'], () =>
	gulp.src('./naturalgasl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(naturalGas))
);
gulp.task('xfer-nuclear', ['xfer-petroleum'], () =>
	gulp.src('./nuclearl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(nuclear))
);
gulp.task('xfer-petroleum', ['xfer-renewable'], () =>
	gulp.src('./petroleuml/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(petroleum))
);
gulp.task('xfer-renewable', ['xfer-total-energy-monthly'], () =>
	gulp.src('./renewablel/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(renewable))
);
gulp.task('xfer-total-energy-monthly', ['xfer-total-energy-annual'], () =>
	gulp.src('./totalenergy/data/monthly/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(totalEnergyMonthly))
);
gulp.task('xfer-total-energy-annual', ['xfer-style-folder'], () =>
	gulp.src('./totalenergy/data/annual/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(totalEnergyAnnual))
);
gulp.task('xfer-style-folder', () =>
	gulp.src('./style-guide/assets/styles/**/*')
	.pipe(gulp.dest(styleFolder))
);

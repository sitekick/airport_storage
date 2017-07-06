module.exports = {
	sass: {
		src:  './src/scss/**/*.scss',
		dest: { 
			dev : './assets/css',
			prod : './build/prod/assets/css'
		},
		options: {
			dev : {
				style: 'expanded'
  			},
  			prod : {
				style: 'compressed'
  			}
		}
	},
	autoprefixer: {
		browsers: [
			'last 2 versions',
			'Firefox >= 43',
			'Chrome >= 43',
			'Safari >= 8',
			'ie >= 9',
			'Edge >= 12',
			'Opera >= 12.1',
			'iOS 6',
			'Android 4'
		],
		cascade: true
	}
}

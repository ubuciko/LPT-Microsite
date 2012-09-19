new TWTR.Widget({
	version: 2,
	type: 'search',
	search: '#lptavth',
	interval: 30000,
	title: '2. Landesparteitag 2012 und Aufstellungsversammlung<br>der PIRATEN Thüringen',
	subject: 'Livetweets zu #lptavth',
	width: 250,
	height: 300,
	theme: {
		shell: {
			background: '#ff8800',
			color: '#000000'
		},
		tweets: {
			background: '#e8e8e8',
			color: '#272828',
			links: '#ff8800'
		}
	},
	features: {
		scrollbar: true,
		loop: true,
		live: true,
		behavior: 'default'
	}
}).render().start();
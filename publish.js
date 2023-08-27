// This file is created automatically by cl-installer
// Do not edit!		
const path = require('path');

module.exports = {
	root: path.resolve(__dirname),
	components: {
        site: require('./vendor/cl/site/publish'),
        console: require('./vendor/cl/console/publish'),
        course: require('./vendor/cl/course/publish'),
        filesystem: require('./vendor/cl/filesystem/publish'),
        grades: require('./vendor/cl/grades/publish'),
        interact: require('./vendor/cl/interact/publish'),
        quiz: require('./vendor/cl/quiz/publish'),
        review: require('./vendor/cl/review/publish'),
        step: require('./vendor/cl/step/publish'),
        team: require('./vendor/cl/team/publish'),
        users: require('./vendor/cl/users/publish')
    }
}

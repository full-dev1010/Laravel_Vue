require('./bootstrap');

const jobs = [{title: 'a', createdAt: new Date()}, {title: 'b', createdAt: new Date(2021, 5, 1)}];
console.log(jobs.filter((job) => job.title == 'a'));

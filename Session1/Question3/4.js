function days(firstDate, secondDate) {
	let newDate = secondDate.getTime() - firstDate.getTime();
	let numberOfDays = newDate / (1000 * 3600 * 24);

	return numberOfDays;
}

let firstDate = new Date("2023-09-30");
let secondDate = new Date("2023-10-2");

console.log(days(firstDate, secondDate));

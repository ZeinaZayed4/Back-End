function objectToArray(obj) {
	const arr1 = [];

	for (const key in obj) {
		arr1.push([key, obj[key]]);
	}
	return arr1;
}

const obj = { a: 1, b: 2 };
const arr1 = objectToArray(obj);

console.log(arr1);

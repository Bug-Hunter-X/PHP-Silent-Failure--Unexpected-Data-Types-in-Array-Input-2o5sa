function calculateSum(numbers) {
  if (!Array.isArray(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }

  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] !== 'number') {
      throw new Error('Invalid input: array elements must be numbers.');
    }
    sum += numbers[i];
  }

  return sum;
}

const numbers = [1, 2, 3, '4', 5]; // Unexpected data type in the input array
const sum = calculateSum(numbers); // This will throw an error
console.log(sum);
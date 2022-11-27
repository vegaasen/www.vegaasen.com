export const chunked = (array, size) =>
  array
    .reduce(
      (acc, _, i) => {
        if (i % size === 0) acc.push(array.slice(i, i + size))
        return acc
      },
      [])
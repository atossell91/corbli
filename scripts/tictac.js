const GRID_HEIGHT = 3
const GRID_WIDTH = 3

function checkHorizontal (rowNum, grid) {
  //  Rows, then columns in 2D arrays
  const firstPos = grid[rowNum][0]
  for (let n = 1; n < GRID_WIDTH; ++n) {
    if (grid[rowNum][n] !== firstPos) {
      return false
    }
  }
  return true
}
function checkVertical (colNum, grid) {
  //  Rows, then columns in 2D arrays
  const firstPos = grid[0][colNum]
  for (let n = 1; n < GRID_HEIGHT; ++n) {
    if (grid[n][colNum] !== firstPos) {
      return false
    }
  }
  return true
}
function checkDiagonal (startX, startY, increment, grid) {
  //  Rows, then columns in 2D arrays
  const firstPos = grid[startY][startX]
  let x = startX + increment
  let y = startY + increment
  while (x >= 0 && x < GRID_WIDTH && y >= 0 && y < GRID_HEIGHT) {
    if (firstPos !== grid[y][x]) {
      return false
    }
    x += increment
    y += increment
  }
  return true
}

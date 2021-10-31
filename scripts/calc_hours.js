const msMin = 60000
const msHour = 3600000
const msDay = 86400000

function toInt (num) {
  if (num >= 0) {
    return Math.floor(num)
  } else {
    return Math.ceiling(num)
  }
}
function numFormat (num, digits) {
  console.log('----- Beginning number format function -----')
  console.log('Formatting ' + num)
  console.log('Number of digits needed: ' + digits)
  if (digits < 2) {
    return num + ''
  }
  const power = digits - 1
  console.log('Power: ' + power)
  const base = Math.pow(10, power)
  console.log('Base: ' + base)
  const floatZeroes = 1 / (Math.log(num) / Math.log(base))
  console.log('addZeroes (decimal): ' + floatZeroes)
  const addZeroes = Math.floor(floatZeroes)
  console.log('Number of zeroes to add: ' + addZeroes)

  let strOut = ''
  for (let n = 0; n < addZeroes; ++n) {
    strOut = strOut.concat('0')
    console.log('Adding a zero. Str: ' + strOut)
  }
  strOut = strOut.concat(num)
  console.log('Final string: ' + strOut)
  console.log('----- Ending number format function (return below) -----')
  return strOut
}
function calculateTimeDiff (msStart, msEnd) {
  //  Ensure end is always after start
  if (msEnd < msStart) {
    msEnd += msDay
  }

  //  Calculate difference between start and end times
  const diff = Math.abs(msEnd - msStart)

  return diff
}
function formatToHoursAndMins (time) {
  // Split time into hours and minutes - func
  const hours = toInt(time / msHour)
  const mins = (time - (hours * msHour)) / msMin

  return hours + ':' + numFormat(mins, 2)
}
//  All values are in ms (below)
function lockToInterval (num, interval) {
  const cutoff = interval / 2
  const time = num + cutoff
  const numIntervals = toInt(time / interval)

  return numIntervals * interval
}
function calculateHours () { // eslint-disable-line no-unused-vars
  //  Get values from html form - func
  const startDate = document.getElementById('start').value
  const endDate = document.getElementById('end').value

  //  Convert html dates to millisecond values
  const msStart = new Date(new Date().toDateString() + ' ' + startDate).getTime()
  const msEnd = new Date(new Date().toDateString() + ' ' + endDate).getTime()

  //  Get difference in end and start time in milliseconds
  let diff = calculateTimeDiff(msStart, msEnd)

  //  subtract lunch break
  diff -= msMin * 30

  //  Lock to intervals of 15 mins (returns millisecond value)
  const time = lockToInterval(diff, msMin * 15)

  //  Convert milliseconds to hours
  const hours = time / msHour

  document.getElementById('time_output').innerHTML = hours
}

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
  var power = digits - 1
  console.log('Power: ' + power)
  var base = Math.pow(10, power)
  console.log('Base: ' + base)
  var floatZeroes = 1 / (Math.log(num) / Math.log(base))
  console.log('addZeroes (decimal): ' + floatZeroes)
  var addZeroes = Math.floor(floatZeroes)
  console.log('Number of zeroes to add: ' + addZeroes)

  var strOut = ''
  for (var n = 0; n < addZeroes; ++n) {
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
  var diff = Math.abs(msEnd - msStart)

  return diff
}
function formatToHoursAndMins (time) {
  // Split time into hours and minutes - func
  var hours = toInt(time / msHour)
  var mins = (time - (hours * msHour)) / msMin

  return hours + ':' + numFormat(mins, 2)
}
//  All values are in ms (below)
function lockToInterval (num, interval) {
  var cutoff = interval / 2
  var time = num + cutoff
  var numIntervals = toInt(time / interval)

  return numIntervals * interval
}
function calculateHours () { // eslint-disable-line no-unused-vars
  //  Get values from html form - func
  var startDate = document.getElementById('start').value
  var endDate = document.getElementById('end').value

  //  Convert html dates to millisecond values
  var msStart = new Date(new Date().toDateString() + ' ' + startDate).getTime()
  var msEnd = new Date(new Date().toDateString() + ' ' + endDate).getTime()

  //  Get difference in end and start time in milliseconds
  var diff = calculateTimeDiff(msStart, msEnd)

  //  subtract lunch break
  diff -= msMin * 30

  //  Lock to intervals of 15 mins (returns millisecond value)
  var time = lockToInterval(diff, msMin * 15)

  //  Convert milliseconds to hours
  var hours = time / msHour

  document.getElementById('time_output').innerHTML = hours
}

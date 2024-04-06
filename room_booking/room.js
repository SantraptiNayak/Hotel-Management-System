var available = true


var checkAvailability = function() {
  console.log('checking availability')
  if (available) {
    document.body.style.backgroundColor = '#5cb85c'
   document.getElementById('text').innerHTML = "Room Available!"
    document.getElementById('the-button').innerHTML = "Book Room"
    
  } else {
    document.body.style.backgroundColor = "#d9534f"
   document.getElementById('text').innerHTML = "Room not available."
   document.getElementById('the-button').innerHTML = "Check other rooms"
  }
}

var buttonClick = function(){
   if(available){
      console.log('booked room')
   } else {
    console.log('other options requested')
    document.getElementById('the-button').style.display = 'none'  
    document.getElementById('room-list').style.display = 'inline-table'
   }
}

var switchState = function(){
   reset()
   available = !available
   checkAvailability()
   console.log('switch button clicked')
}

var reset = function(){
   document.getElementById('room-list').style.display = 'none'
   document.getElementById("the-button").style.display = 'block'
}

reset()
checkAvailability()

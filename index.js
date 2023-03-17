let cars = [
    {
      "color": "purple",
      "type": "minivan",
      "registration": new Date('2017-01-03'),
      "capacity": 7
    },
    {
      "color": "red",  
      "type": "station wagon",
      "registration": new Date('2018-03-03'),
      "capacity": 5
    },
    {
      "color": "green",
      "type": "station wagon",
      "registration": new Date('2017-07-08'),
      "capacity": 5
    },
    {
      "color": "blue",
      "type": "station wagon",
      "registration": new Date('2019-01-05'),
      "capacity": 3
    },
    {
      "color": "orange",
      "type": "station wagon",
      "registration": new Date('2019-05-07'),
      "capacity": 5
    }
  ]

// List of cars which has capacity  = 5
  let capacity_array = []
   
  for (let i = 0; i < cars.length; i++) {
      if (cars[i].capacity == 5){
       capacity_array.push(cars[i])
      }// Online Javascript Editor for free
  }
document.write(capacity_array)

 //List of cars which has type “station wagon” and capacity = 5
let capacitytype_array = []
   
  for (let i = 0; i < cars.length; i++) {
      if (cars[i].capacity == 5 && cars[i].type === "station wagon"){
       capacitytype_array.push(cars[i])
      }// Online Javascript Editor for free
  }
document.write(capacitytype_array)

 //List of cars which has registration between 2017 to 2018.
let date_array = []
   
  for (let i = 0; i < cars.length; i++) {
      if (cars[i].registration >=  new Date('2017-01-03') &&  cars[i].registration <= new Date('2018-03-03') ){
       date_array.push(cars[i])
      }// Online Javascript Editor for free
  }
document.write(date_array)

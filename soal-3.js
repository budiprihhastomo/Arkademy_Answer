const inputUser = "programit"
const inputUser2 = "programmerit"

var filtered = ["pro","gram","merit","program","it","programmer"]

const filterInput = (val)=>{
  var successFiltered = []
  var notFiltered = []
  filtered.forEach((item)=>{
    if(String(val.match(item)) != 'null'){
      notFiltered.push(String(val.match(item)))
      var idx = notFiltered.indexOf("program")
      if(idx > -1) notFiltered.splice(idx,1)
    }
  })
  console.log(notFiltered)
}

filterInput(inputUser)
filterInput(inputUser2)
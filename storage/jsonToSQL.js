const fs = require('fs');
const obj = JSON.parse(fs.readFileSync("./storage/json/competencies.json", 'utf8'));
const table = "tbCompetencies",
  values = ["name", "years", "stars", "image_link"],
  types = ["str", "int", "int", "str"]
let out = `INSERT INTO ${table}(${values.join(",")}) VALUES\n`

obj.forEach((j,i) => {
  out+="(";
  values.forEach((v,i2) => {
    if(types[i2]==="str") out += `"${j[v]}"`;
    else out += j[v]
    if(i2 < values.length - 1) out+=","
  })
  out+=")";
  if(i < obj.length  - 1) out+=",\n";
})

console.log(out);
import fs from "node:fs";

try {
  fs.writeFileSync("./dist/CNAME", "demo.tec.sh");
} catch (e) {
  console.log(e.toString());
}

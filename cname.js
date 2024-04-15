import fs from "node:fs";

try {
  fs.writeFileSync("./dist/CNAME", "demo.tec.sh");
  fs.writeFileSync(
    "./dist/README.md",
    `## Tec.sh

  #### A live demo setup to showcase our software, scripts & themes.

  ### Please check [demo.tec.sh](https://demo.tec.sh)
`
  );
} catch (e) {
  console.log(e.toString());
}

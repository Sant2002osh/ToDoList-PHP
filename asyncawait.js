async function getData() {
  console.log("Fetching data...");
  const result = await new Promise((resolve) => setTimeout(() => resolve("Data fetched!"), 2000));
  console.log(result);
}
getData();

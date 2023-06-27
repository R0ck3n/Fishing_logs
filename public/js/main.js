/*petit exemple de call API*/
(async function townInfo() {
  const townName = "bordeaux";
  const town = await fetch(
    `https://geo.api.gouv.fr/communes?nom=${townName}`
  ).then((response) => response.json());
  console.log(town);
})();

const baseUrl = 'http://localhost:8000';

export const Api = {
   getDomains: async () => {
      let response = await fetch(`${baseUrl}/domains`);
      let json = await response.json();
      return json;
   },

   postDomain: async ({ name, tld }) => {
      let response = await fetch(`${baseUrl}/domain`, {
         method: 'post',
         headers: { 'Content-Type': 'application/json; charset=UTF-8' },
         body: JSON.stringify({ name, tld }),
      });

      let json = await response.json();
      return json;
   },
};

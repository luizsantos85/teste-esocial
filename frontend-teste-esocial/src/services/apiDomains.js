const baseUrl = 'http://localhost:8000';

export const Api = {
   getDomains: async () => {
      let response = await fetch(`${baseUrl}/domains`);
      let json = await response.json();
      return json;
   },

   showDomain: async (id) => {
      let response = await fetch(`${baseUrl}/domain/${id}`);
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

   updateDomain: async ({ id, name, tld }) => {
      let response = await fetch(`${baseUrl}/domain/${id}`, {
         method: 'put',
         headers: { 'Content-Type': 'application/json; charset=UTF-8' },
         body: JSON.stringify({ name, tld }),
      });

      let json = await response.json();
      return json;
   },

   deleteDomain: async (id) => {
      let response = await fetch(`${baseUrl}/domain/${id}`, {
         method: 'delete',
      });

      let json = await response.json();
      return json;
   },
};

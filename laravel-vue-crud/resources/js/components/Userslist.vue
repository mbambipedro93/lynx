


<template>
    <div>
      <Userslist /> <!-- Utilisation du composant -->
    </div>
  </template>
  

<script>
import Userslist from "../components/Userslist.vue"; // Décommentez cette ligne

export default {
    name: 'Userslist', // Assurez-vous que le nom correspond
    components: {
        Userslist, // Enregistrez le composant localement
    },
}
</script>

<template>
    <div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8" >
            <form method="POST" action="{{ route('dashboard') }}">

                <label for="title" class="block text-gray-700 text-sm font-bold mb-2" >Titre de l'événement :</label>
                <input type="text" name="title" id="title" required>
                <br>
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description de l'événement :</label>
                <textarea name="description" id="description" required></textarea>
                <br>
                <button type="submit">Créer l'événement</button>
            </form>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div v-for="event in apiData.results" :key="event.uid"
                class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                <div class="flex items-center">
                    <img src="{{ $event.originalimage }}" alt="Image de l'événement">

                    <h2 class="ml-3 text-xl font-semibold text-gray-900">{{ event.title_fr }}</h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">{{ event.description_fr }}</p>
            </div>
        </div>
    </div>
</template>
  
<script setup>
import { ref, onMounted } from 'vue';

const eventData = ref({
  title: '',
  description: '',
});

const createEvent = () => {
  axios.post('/store-event', eventData.value)
    .then(response => {
      console.log(eventData);
    })
    .catch(error => {
      
    });
};


const apiData = ref({
    total_count: 0,
    results: [],
});

const fetchApiData = async () => {
    try {
        const response = await fetch('https://public.opendatasoft.com/api/explore/v2.1/catalog/datasets/evenements-publics-openagenda/records');
        const data = await response.json();
        apiData.value = data; 
    } catch (error) {
        console.error('Erreur lors de la récupération des données de l\'API :', error);
    }
};

onMounted(() => {
    fetchApiData();
});
</script>
  
<template>
  <div class="flex items-center rounded-lg bg-white shadow-lg overflow-hidden">
    <img class="h-32 w-32 flex-shrink-0" :src="destination.imageUrl" :alt="destination.imageAlt" />
    <div class="px-6 py-4">
      <h3 class="text-lg font-semibold text-gray-800">{{ destination.city }}</h3>
      <p class="text-gray-600">${{ destination.averagePrice }} / night average</p>
      <div class="mt-4">
        <a
          href="#"
          class="text-indigo-500 hover:text-indigo-400 font-semibold text-sm"
        >Explore {{ destination.propertyCount }} properties</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['destination'],

  // data() {
  //   return {
  //     popularDestinations: [
  //       {
  //         city: 'Toronto',
  //         averagePrice: 120,
  //         propertyCount: 76,
  //         imageUrl: '/img/toronto.jpg',
  //         imageAlt: 'Toronto skyline',
  //       },
  //       {
  //         city: 'Malibu',
  //         averagePrice: 215,
  //         propertyCount: 43,
  //         imageUrl: '/img/malibu.jpg',
  //         imageAlt: 'Cliff in Malibu',
  //       },
  //       {
  //         city: 'Chicago',
  //         averagePrice: 130,
  //         propertyCount: 115,
  //         imageUrl: '/img/chicago.jpg',
  //         imageAlt: 'Chicago skyline',
  //       },
  //       {
  //         city: 'Seattle',
  //         averagePrice: 135,
  //         propertyCount: 63,
  //         imageUrl: '/img/seattle.jpg',
  //         imageAlt: 'Seattle skyline',
  //       },
  //       {
  //         city: 'Colorado',
  //         averagePrice: 85,
  //         propertyCount: 47,
  //         imageUrl: '/img/colorado.jpg',
  //         imageAlt: 'Lake in Colorado',
  //       },
  //       {
  //         city: 'Miami',
  //         averagePrice: 115,
  //         propertyCount: 86,
  //         imageUrl: '/img/miami.jpg',
  //         imageAlt: 'Beach in Miami',
  //       },
  //     ]
  //   }
  // }
};
</script>

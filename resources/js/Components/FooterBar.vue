<script setup>
import { computed } from 'vue'
import { containerMaxW } from '@/config.js';
import BaseLevel from '@/Components/BaseLevel.vue'
import JustboilLogo from '@/Components/JustboilLogo.vue'

const year = computed(() => new Date().getFullYear())
</script>

<template>
  <!-- <footer class="py-2 px-6">
    <BaseLevel :class="containerMaxW">
      <div class="text-center md:text-left">
        <b>&copy;{{ year }}, <a
          href="https://justboil.me/"
          target="_blank"
        >JustBoil.me</a>.</b>
        Get more with <a
          href="https://tailwind-vue.justboil.me/"
          target="_blank"
          class="text-blue-600"
        >Premium version</a>
      </div>
      <div class="md:py-2">
        <a href="https://justboil.me">
          <JustboilLogo class="w-auto h-8 md:h-6" />
        </a>
      </div>
    </BaseLevel>
  </footer> -->


  <footer class="flex justify-between mt-4 px-8 py-4 text-gray-500 border-t-2 text-xs font-bold bg-white">
    <div class="plex space-x-4">
      <a href="#" class="hover:text-indigo-600">Developed by Salim Mbisse</a>
     
    </div>
    <div>&copy; {{ new Date().getFullYear() }} UBX - Case Management System</div>
  </footer>

</template>

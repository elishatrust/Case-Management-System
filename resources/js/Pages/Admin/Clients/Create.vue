<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
  mdiAccountKey,
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import CardBox from "@/Components/CardBox.vue"
import FormField from '@/Components/FormField.vue'
import FormControl from '@/Components/FormControl.vue'
import FormCheckRadioGroup from '@/Components/FormCheckRadioGroup.vue'
import BaseDivider from '@/Components/BaseDivider.vue'
import BaseButton from '@/Components/BaseButton.vue'
import BaseButtons from '@/Components/BaseButtons.vue'


const form = useForm({
  name: '',
  email: '',
  phone: '',
  address: '', 
})
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Register New Client" />
    <SectionMain>
      <SectionTitleLineWithButton
        :icon="mdiAccountKey"
        title="Register Client"
        main
      >
        <BaseButton
        :route-name="route('clients.index')"
          :icon="mdiArrowLeftBoldOutline"
          label="Back"
          color="white"
          rounded-full
          small
        />
      </SectionTitleLineWithButton>
      <CardBox
        form  @submit.prevent="form.post(route('clients.store'))">
        <FormField
          label="Client Name"
          :class="{ 'text-red-400': form.errors.name }"
        >
          <FormControl
          v-model="form.name"
            type="text"
            placeholder="Surname, First Name"
            :error="form.errors.name"

          >
            <div class="text-red-400 text-sm" v-if="form.errors.name">
              {{ form.errors.name }}

             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Email Address"
          :class="{ 'text-red-400': form.errors.email }"
        >
          <FormControl
          v-model="form.email"
            type="text"
            placeholder="Enter Email"
            :error="form.errors.email"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.email">
              {{ form.errors.email }}
             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Phone Number"
          :class="{ 'text-red-400': form.errors.phone }"
        >
          <FormControl
            type="number"
            placeholder="Phone Number eg: 0712XXXXX"
            :error="form.errors.phone"

          >
            <div class="text-red-400 text-sm" v-if="form.errors.phone">
              {{ form.errors.phone }}
             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Physical Address"
          :class="{ 'text-red-400': form.errors.address }"
        >
          <FormControl
          :error="form.errors.address"
            type="text"
            placeholder="Enter Home Address eg: Tabata, Matumbi"
           
          >
            <div class="text-red-400 text-sm" v-if="form.errors.address">
              {{ form.errors.address }}
            </div>
          </FormControl>
        </FormField>

        <BaseDivider />


        <template #footer>
          <BaseButtons>
            <BaseButton
              type="submit"
              color="info"
              label="Register Now"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            />
          </BaseButtons>
        </template>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>

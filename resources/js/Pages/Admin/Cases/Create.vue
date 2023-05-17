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
    <Head title="Register New Case" />
    <SectionMain>
      <SectionTitleLineWithButton
        :icon="mdiAccountKey"
        title="Register Case"
        main
      >
        <BaseButton
       
          :icon="mdiArrowLeftBoldOutline"
          label="Back"
          color="white"
          rounded-full
          small
        />
      </SectionTitleLineWithButton>
      <CardBox
        form >
        <FormField
          label="Client Name"
          
        >
          <FormControl
         
            type="text"
            placeholder="Surname, First Name"
            

          >
            <div class="text-red-400 text-sm" >
            

             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Case Title"
         
        >
          <FormControl
         
            type="text"
            placeholder="Eg: Armed Robbery"
            
          >
            <div class="text-red-400 text-sm" >
             
             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Court Name"
          
        >
          <FormControl
            type="text"
            placeholder="Court Name eg: Kisutu High Court"
           

          >
            <div class="text-red-400 text-sm" >
            
             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Offended Name"
         
        >
          <FormControl
          
            type="text"
            placeholder="Offended Name"
           
          >
            <div class="text-red-400 text-sm" >
             
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Hearing Date"
         
        >
          <FormControl
         
            type="date"
            placeholder="Offended Name"
           
          >
            <div class="text-red-400 text-sm" >
             
            </div>
          </FormControl>
        </FormField>


        <div>
          <div
           class="imagePreviewWrapper"
           :style="{ 'background-image': `url(${previewImage})` }"
           @click="selectImage">
          </div>

    <input
      ref="fileInput"
      type="file"
      @input="pickFile">
  </div>

        <BaseDivider />


        <template #footer>
          <BaseButtons>
            <BaseButton
              type="submit"
              color="info"
              label="Create Case"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            />
          </BaseButtons>
        </template>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>

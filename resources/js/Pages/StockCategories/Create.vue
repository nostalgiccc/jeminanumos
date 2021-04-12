<template>
    <div>
        <Layout>
            <div class="flex justify-center w-full">
                <div class="bg-white flex flex-col w-1/3 mt-20 p-6">
                    <h2 class="text-lg">Stock Category Form</h2>
                    <form
                        id="stock-form"
                        name="stock-form"
                        v-on:submit.prevent="submit"
                    >
                        <div class="flex flex-col pt-6">
                            <label for="id">ID</label>
                            <input
                                type="text"
                                id="id"
                                name="id"
                                v-model="form.id"
                                autocomplete="off"
                            />
                            <div class="text-red-700 text-sm">
                                {{ errors.id }}
                            </div>
                            {{ form.id }}
                        </div>

                        <div class="flex flex-col pt-6">
                            <label for="description">Description</label>
                            <input
                                type="text"
                                id="description"
                                name="description"
                                v-model="form.description"
                                autocomplete="off"
                            />
                            <div class="text-red-700 text-sm">
                                {{ errors.description }}
                            </div>
                        </div>

                        <div class="flex flex-col pt-6">
                            <label for="type">Type</label>
                            <select name="type" id="type" v-model="form.type">
                                <option value="F">Finished Goods</option>
                                <option value="R">Raw Materials</option>
                                <option value="D">Dummy</option>
                            </select>

                            <div class="text-red-700 text-sm">
                                {{ errors.type }}
                            </div>
                        </div>

                        <div class="flex flex-col pt-6">
                            <label for="stock-account">Stock Account</label>
                            <input
                                type="text"
                                id="stock-account"
                                name="stock-account"
                                v-model="form.stock_account"
                            />
                            <div class="text-red-700 text-sm">
                                {{ errors.stock_account }}
                            </div>
                        </div>

                        <div class="flex flex-col pt-6">
                            <button
                                type="submit"
                                class="bg-indigo-800 text-white p-2"
                            >
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </Layout>
    </div>
</template>

<script>
import { ref, reactive } from "vue";
import Layout from "@/Layouts/Authenticated";
import { Inertia } from "@inertiajs/inertia";
export default {
    components: {
        Layout,
    },
    props: {
        errors: Object,
    },
    setup(props, context) {
        const form = reactive({
            id: null,
            description: null,
            type: "F",
            stock_account: null,
        });
        const submit = () => {
            Inertia.post(route("sc.store"), form, {
                onSuccess: () => {
                    form.id = null;
                    form.description = null;
                    form.type = "F";
                    form.stock_account = null;
                },
            });
        };
        return {
            form,
            submit,
        };
    },
};
</script>
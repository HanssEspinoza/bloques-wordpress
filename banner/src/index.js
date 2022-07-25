import {registerBlockType} from "@wordpress/blocks";

registerBlockType("intmun/banner", {
    title: "Banner",
    category: "widgets",
    icon: "admin-users",
    edit: () => <h2>Banner</h2>,
    save: () => <h2>Banner</h2>
});
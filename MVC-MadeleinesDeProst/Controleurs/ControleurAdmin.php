<?php
final class ControleurAdmin {
    public function defautAction() {
        Vue::montrer("admin/entete");
        Vue::montrer("admin/admin");
    }
}
-- Migration script to add pdf_file field to tb_buku table
-- Run this after backing up your database

ALTER TABLE `tb_buku` ADD `pdf_file` VARCHAR(255) NULL AFTER `cover_image`;



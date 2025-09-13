-- Migration script to add cover_image field to tb_buku table
-- Run this script to add book cover image functionality

-- Add cover_image column to tb_buku table
ALTER TABLE `tb_buku` ADD `cover_image` VARCHAR(255) NULL AFTER `th_terbit`;

-- Update existing records to have NULL cover_image (optional)
-- UPDATE `tb_buku` SET `cover_image` = NULL WHERE `cover_image` IS NULL;

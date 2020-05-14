<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL;

use FFI\CData;

/**
 * @version 1.0
 */
class WGL extends GL
{
    /**
     * UseFontOutlines format.
     *
     * @since 1.0
     * @var int
     */
    public const
        WGL_FONT_LINES = 0x0000,
        WGL_FONT_POLYGONS = 0x0001;

    /**
     * SwapLayerBuffers flags.
     *
     * @since 1.0
     * @var int
     */
    public const
        WGL_SWAP_MAIN_PLANE = 0x0001,
        WGL_SWAP_OVERLAY1 = 0x0002,
        WGL_SWAP_OVERLAY2 = 0x0004,
        WGL_SWAP_OVERLAY3 = 0x0008,
        WGL_SWAP_OVERLAY4 = 0x0010,
        WGL_SWAP_OVERLAY5 = 0x0020,
        WGL_SWAP_OVERLAY6 = 0x0040,
        WGL_SWAP_OVERLAY7 = 0x0080,
        WGL_SWAP_OVERLAY8 = 0x0100,
        WGL_SWAP_OVERLAY9 = 0x0200,
        WGL_SWAP_OVERLAY10 = 0x0400,
        WGL_SWAP_OVERLAY11 = 0x0800,
        WGL_SWAP_OVERLAY12 = 0x1000,
        WGL_SWAP_OVERLAY13 = 0x2000,
        WGL_SWAP_OVERLAY14 = 0x4000,
        WGL_SWAP_OVERLAY15 = 0x8000,
        WGL_SWAP_UNDERLAY1 = 0x0001_0000,
        WGL_SWAP_UNDERLAY2 = 0x0002_0000,
        WGL_SWAP_UNDERLAY3 = 0x0004_0000,
        WGL_SWAP_UNDERLAY4 = 0x0008_0000,
        WGL_SWAP_UNDERLAY5 = 0x0010_0000,
        WGL_SWAP_UNDERLAY6 = 0x0020_0000,
        WGL_SWAP_UNDERLAY7 = 0x0040_0000,
        WGL_SWAP_UNDERLAY8 = 0x0080_0000,
        WGL_SWAP_UNDERLAY9 = 0x0100_0000,
        WGL_SWAP_UNDERLAY10 = 0x0200_0000,
        WGL_SWAP_UNDERLAY11 = 0x0400_0000,
        WGL_SWAP_UNDERLAY12 = 0x0800_0000,
        WGL_SWAP_UNDERLAY13 = 0x1000_0000,
        WGL_SWAP_UNDERLAY14 = 0x2000_0000,
        WGL_SWAP_UNDERLAY15 = 0x4000_0000;

    /**
     * Copies selected groups of rendering states from one OpenGL rendering context to another.
     *
     * @since 1.0
     * @param CData|null $hglrcSrc the source OpenGL rendering context whose state information is to be copied
     * @param CData|null $hglrcDst the destination OpenGL rendering context to which state information is to be copied
     * @param int $mask which groups of the $src rendering state are to be copied to $dst. It contains the bitwise-OR
     *      of the same symbolic names that are passed to the {@see GL11::pushAttrib} function. You can use
     *      {@see GL11::GL_ALL_ATTRIB_BITS} to copy all the rendering state information.
     * @return bool
     */
    public function copyContext(?CData $hglrcSrc, ?CData $hglrcDst, int $mask): bool
    {
        return $this->info->ffi->wglCopyContext($hglrcSrc, $hglrcDst, $mask) !== 0;
    }

    /**
     * Deletes a specified OpenGL rendering context.
     *
     * @since 1.0
     * @param CData|null $oldContext handle to an OpenGL rendering context that the function will delete
     * @return bool
     */
    public function deleteContext(?CData $oldContext): bool
    {
        return $this->info->ffi->wglDeleteContext($oldContext) !== 0;
    }

    /**
     * The wglDescribeLayerPlane function obtains information about the layer planes of a given pixel format.
     *
     * @since 1.0
     * @param CData|null $hDc Specifies the device context of a window whose layer planes are to be described.
     * @param int $pixelFormat Specifies which layer planes of a pixel format are being described.
     * @param int $layerPlane Specifies the overlay or underlay plane. Positive values of iLayerPlane identify
     *      overlay planes, where 1 is the first overlay plane over the main plane, 2 is the second overlay plane
     *      over the first overlay plane, and so on. Negative values identify underlay planes, where 1 is the first
     *      underlay plane under the main plane, 2 is the second underlay plane under the first underlay plane,
     *      and so on. The number of overlay and underlay planes is given in the bReserved member of the
     *      PIXELFORMATDESCRIPTOR structure.
     * @param int $nBytes Specifies the size, in bytes, of the structure pointed to by plpd. The wglDescribeLayerPlane
     *      function stores layer plane data in a LAYERPLANEDESCRIPTOR structure, and stores no more than nBytes of
     *      data. Set the value of nBytes to the size of LAYERPLANEDESCRIPTOR.
     * @param CData|null $plpd Points to a LAYERPLANEDESCRIPTOR structure. The wglDescribeLayerPlane function sets the
     *      value of the structure's data members. The function stores the number of bytes of data copied to the
     *      structure in the nSize member.
     * @return bool
     */
    public function describeLayerPlane(
        ?CData $hDc,
        int $pixelFormat,
        int $layerPlane,
        int $nBytes,
        ?CData $plpd
    ): bool {
        return $this->info->ffi->wglDescribeLayerPlane($hDc, $pixelFormat, $layerPlane, $nBytes, $plpd) !== 0;
    }

    /**
     * Makes a specified OpenGL rendering context the calling thread's current rendering context. All subsequent OpenGL
     * calls made by the thread are drawn on the device identified by device. You can also use MakeCurrent to change
     * the calling thread's current rendering context so it's no longer current.
     *
     * @since 1.0
     * @param CData|null $hDc handle to a device context. Subsequent OpenGL calls made by the calling thread are drawn
     *      on the device identified by dc.
     * @param CData|null $newContext handle to an OpenGL rendering context that the function sets as the calling
     *      thread's rendering context. If $newContext is NULL, the function makes the calling thread's
     *      current rendering context no longer current, and releases the device context that is used by the rendering
     *      context. In this case, $hDc is ignored.
     * @return bool
     */
    public function makeCurrent(?CData $hDc, ?CData $newContext): bool
    {
        return $this->info->ffi->wglMakeCurrent($hDc, $newContext) !== 0;
    }

    /**
     * The wglRealizeLayerPalette function maps palette entries from a given color-index layer plane into the physical
     * palette or initializes the palette of an RGBA layer plane.
     *
     * The physical palette for a layer plane is a shared resource among windows with layer planes. When more than one
     * window attempts to realize a palette for a given physical layer plane, only one palette at a time is realized.
     * When you call the wglRealizeLayerPalette function, the layer palette of a foreground window is always realized
     * first.
     *
     * When a window's layer palette is realized, its palette entries are always mapped one-to-one into the physical
     * palette. Unlike GDI logical palettes, with wglRealizeLayerPalette there is no mapping of other windows' layer
     * palettes to the current physical palette.
     *
     * Whenever a window becomes the foreground window, call wglRealizeLayerPalette to realize its layer palettes again,
     * even if the pixel type of the layer plane is RGBA.
     *
     * Because wglRealizeLayerPalette doesn't realize the palette of the main plane, use GDI palette functions to
     * realize the main plane palette.
     *
     * @since 1.0
     * @param CData|null $hdc Specifies the device context of a window whose layer plane palette is to be realized into
     *      the physical palette.
     * @param int $iLayerPlane Specifies the overlay or underlay plane. Positive values of iLayerPlane identify overlay
     *      planes, where 1 is the first overlay plane over the main plane, 2 is the second overlay plane over the
     *      first overlay plane, and so on. Negative values identify underlay planes, where 1 is the first underlay
     *      plane under the main plane, 2 is the second underlay plane under the first underlay plane, and so on. The
     *      number of overlay and underlay planes is given in the bReserved member of the PIXELFORMATDESCRIPTOR
     *      structure.
     * @param int $bRealize Indicates whether the palette is to be realized into the physical palette. When bRealize is
     *      TRUE, the palette entries are mapped into the physical palette where available. When bRealize is FALSE, the
     *      palette entries for the layer plane of the window are no longer needed and might be released for use by
     *      another foreground window.
     * @return bool
     */
    public function realizeLayerPalette(?CData $hdc, int $iLayerPlane, int $bRealize): bool
    {
        return $this->info->ffi->wglRealizeLayerPalette($hdc, $iLayerPlane, $bRealize) !== 0;
    }

    /**
     * Enables multiple OpenGL rendering contexts to share a single display-list space.
     *
     * @since 1.0
     * @param CData|null $hrcSrvShare
     * @param CData|null $hrcSrvSource
     * @return bool
     */
    public function shareLists(?CData $hrcSrvShare, ?CData $hrcSrvSource): bool
    {
        return $this->info->ffi->wglShareLists($hrcSrvShare, $hrcSrvSource) !== 0;
    }

    /**
     * The wglSwapLayerBuffers function swaps the front and back buffers in the overlay, underlay, and main planes of
     * the window referenced by a specified device context.
     *
     * @since 1.0
     * @param CData|null $hdc
     * @param int $fuFlags
     * @return bool
     */
    public function swapLayerBuffers(?CData $hdc, int $fuFlags): bool
    {
        return $this->info->ffi->wglSwapLayerBuffers($hdc, $fuFlags) !== 0;
    }

    /**
     * The wglUseFontBitmaps function creates a set of bitmap display lists for use in the current OpenGL rendering
     * context. The set of bitmap display lists is based on the glyphs in the currently selected font in the device
     * context. You can then use bitmaps to draw characters in an OpenGL image.
     *
     * The wglUseFontBitmaps function creates count display lists, one for each of a run of count glyphs that begins
     * with the first glyph in the hdc parameter's selected fonts.
     *
     * @since 1.0
     * @param CData|null $hDC
     * @param int $first
     * @param int $count
     * @param int $listBase
     * @return bool
     */
    public function useFontBitmapsA(?CData $hDC, int $first, int $count, int $listBase): bool
    {
        return $this->info->ffi->wglUseFontBitmapsA($hDC, $first, $count, $listBase) !== 0;
    }

    /**
     * The wglUseFontBitmaps function creates a set of bitmap display lists for use in the current OpenGL rendering
     * context. The set of bitmap display lists is based on the glyphs in the currently selected font in the device
     * context. You can then use bitmaps to draw characters in an OpenGL image.
     *
     * The wglUseFontBitmaps function creates count display lists, one for each of a run of count glyphs that begins
     * with the first glyph in the hdc parameter's selected fonts.
     *
     * @since 1.0
     * @param CData|null $hDC
     * @param int $first
     * @param int $count
     * @param int $listBase
     * @return bool
     */
    public function useFontBitmapsW(?CData $hDC, int $first, int $count, int $listBase): bool
    {
        return $this->info->ffi->wglUseFontBitmapsW($hDC, $first, $count, $listBase) !== 0;
    }

    /**
     * The wglUseFontOutlines function creates a set of display lists, one for each glyph of the currently selected
     * outline font of a device context, for use with the current rendering context. The display lists are used to
     * draw 3-D characters of TrueType fonts. Each display list describes a glyph outline in floating-point coordinates.
     *
     * The run of glyphs begins with the first glyph of the font of the specified device context. The em square size of
     * the font, the notional grid size of the original font outline from which the font is fitted, is mapped to 1.0 in
     * the x- and y-coordinates in the display lists. The extrusion parameter sets how much depth the font has in the z
     * direction.
     *
     * The lpgmf parameter returns a GLYPHMETRICSFLOAT structure that contains information about the placement and
     * orientation of each glyph in a character cell.
     *
     * @since 1.0
     * @param CData|null $hDC
     * @param int $first
     * @param int $count
     * @param int $listBase
     * @param float $deviation
     * @param float $extrusion
     * @param int $format
     * @param CData|null $lpgmf
     * @return bool
     */
    public function useFontOutlinesA(
        ?CData $hDC,
        int $first,
        int $count,
        int $listBase,
        float $deviation,
        float $extrusion,
        int $format,
        ?CData $lpgmf
    ): bool {
        return $this->info->ffi->wglUseFontOutlinesA($hDC, $first, $count, $listBase, $deviation, $extrusion, $format, $lpgmf) !== 0;
    }

    /**
     * The wglUseFontOutlines function creates a set of display lists, one for each glyph of the currently selected
     * outline font of a device context, for use with the current rendering context. The display lists are used to
     * draw 3-D characters of TrueType fonts. Each display list describes a glyph outline in floating-point coordinates.
     *
     * The run of glyphs begins with the first glyph of the font of the specified device context. The em square size of
     * the font, the notional grid size of the original font outline from which the font is fitted, is mapped to 1.0 in
     * the x- and y-coordinates in the display lists. The extrusion parameter sets how much depth the font has in the z
     * direction.
     *
     * The lpgmf parameter returns a GLYPHMETRICSFLOAT structure that contains information about the placement and
     * orientation of each glyph in a character cell.
     *
     * @since 1.0
     * @param CData|null $hDC
     * @param int $first
     * @param int $count
     * @param int $listBase
     * @param float $deviation
     * @param float $extrusion
     * @param int $format
     * @param CData|null $lpgmf
     * @return bool
     */
    public function useFontOutlinesW(
        ?CData $hDC,
        int $first,
        int $count,
        int $listBase,
        float $deviation,
        float $extrusion,
        int $format,
        ?CData $lpgmf
    ): bool {
        return $this->info->ffi->wglUseFontOutlinesW($hDC, $first, $count, $listBase, $deviation, $extrusion, $format, $lpgmf) !== 0;
    }

    /**
     * The wglCreateContext function creates a new OpenGL rendering context, which is suitable for drawing on the
     * device referenced by hdc. The rendering context has the same pixel format as the device context.
     *
     * @since 1.0
     * @param CData|null $hDc
     * @return CData
     */
    public function createContext(?CData $hDc): CData
    {
        return $this->info->ffi->wglCreateContext($hDc);
    }

    /**
     * The wglCreateLayerContext function creates a new OpenGL rendering context for drawing to a specified layer
     * plane on a device context.
     *
     * @since 1.0
     * @param CData|null $hDc
     * @param int $level
     * @return CData
     */
    public function createLayerContext(?CData $hDc, int $level): CData
    {
        return $this->info->ffi->wglCreateLayerContext($hDc, $level);
    }

    /**
     * The wglGetCurrentContext function obtains a handle to the current OpenGL rendering context of the calling thread.
     *
     * @since 1.0
     * @return CData
     */
    public function getCurrentContext(): CData
    {
        return $this->info->ffi->wglGetCurrentContext();
    }

    /**
     * Retrieves the palette entries from a given color-index layer plane for a specified device context.
     *
     * @since 1.0
     * @param CData|null $hdc
     * @param int $iLayerPlane
     * @param int $iStart
     * @param int $cEntries
     * @param CData|null $pcr
     * @return int
     */
    public function getLayerPaletteEntries(
        ?CData $hdc,
        int $iLayerPlane,
        int $iStart,
        int $cEntries,
        ?CData $pcr
    ): int {
        return $this->info->ffi->wglGetLayerPaletteEntries($hdc, $iLayerPlane, $iStart, $cEntries, $pcr);
    }

    /**
     * Sets the palette entries in a given color-index layer plane for a specified device context.
     *
     * @since 1.0
     * @param CData|null $hdc
     * @param int $iLayerPlane
     * @param int $iStart
     * @param int $cEntries
     * @param CData|null $pcr
     * @return int
     */
    public function setLayerPaletteEntries(
        ?CData $hdc,
        int $iLayerPlane,
        int $iStart,
        int $cEntries,
        ?CData $pcr
    ): int {
        return $this->info->ffi->wglSetLayerPaletteEntries($hdc, $iLayerPlane, $iStart, $cEntries, $pcr);
    }

    /**
     * The wglGetCurrentDC function obtains a handle to the device context that is associated with the current OpenGL
     * rendering context of the calling thread.
     *
     * @since 1.0
     * @return CData
     */
    public function getCurrentDC(): CData
    {
        return $this->info->ffi->wglGetCurrentDC();
    }

    /**
     * The wglGetProcAddress function returns the address of an OpenGL extension function for use with the current
     * OpenGL rendering context.
     *
     * @since 1.0
     * @param string $proc
     * @return CData
     */
    public function getProcAddress(string $proc): CData
    {
        return $this->info->ffi->wglGetProcAddress($proc);
    }
}

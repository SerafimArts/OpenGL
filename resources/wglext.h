#include <winapi.h>

extern BOOL wglCopyContext(HGLRC hglrcSrc, HGLRC hglrcDst, UINT mask);
extern HGLRC wglCreateContext(HDC hDc);
extern HGLRC wglCreateLayerContext(HDC hDc, int level);
extern BOOL wglDeleteContext(HGLRC oldContext);
extern BOOL wglDescribeLayerPlane(HDC hDc, int pixelFormat, int layerPlane, UINT nBytes, const LAYERPLANEDESCRIPTOR *plpd);
extern HGLRC wglGetCurrentContext(void);
extern HDC wglGetCurrentDC(void);
extern int wglGetLayerPaletteEntries(HDC hdc, int iLayerPlane, int iStart, int cEntries, const COLORREF *pcr);
extern PROC wglGetProcAddress(LPCSTR lpszProc);
extern BOOL wglMakeCurrent(HDC hDc, HGLRC newContext);
extern BOOL wglRealizeLayerPalette(HDC hdc, int iLayerPlane, BOOL bRealize);
extern int wglSetLayerPaletteEntries(HDC hdc, int iLayerPlane, int iStart, int cEntries, const COLORREF *pcr);
extern BOOL wglShareLists(HGLRC hrcSrvShare, HGLRC hrcSrvSource);
extern BOOL wglSwapLayerBuffers(HDC hdc, UINT fuFlags);
extern BOOL wglUseFontBitmapsA(HDC hDC, DWORD first, DWORD count, DWORD listBase);
extern BOOL wglUseFontBitmapsW(HDC hDC, DWORD first, DWORD count, DWORD listBase);
extern BOOL wglUseFontOutlinesA(HDC hDC, DWORD first, DWORD count, DWORD listBase, FLOAT deviation, FLOAT extrusion, int format, LPGLYPHMETRICSFLOAT lpgmf);
extern BOOL wglUseFontOutlinesW(HDC hDC, DWORD first, DWORD count, DWORD listBase, FLOAT deviation, FLOAT extrusion, int format, LPGLYPHMETRICSFLOAT lpgmf);
